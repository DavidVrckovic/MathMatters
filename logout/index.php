<?php
// Include the main script
require_once(dirname(__DIR__) . "/php/main.php");



// Check if a user is logged in within the session
if (isset($_SESSION["loggedin"])) {

    // End the session
    session_destroy();
}



// Check if a user is logged in locally (if a cookie is set)
if (isset($_COOKIE["session_token"])) {

    // Encrypt a locally saved session token
    $encrypted_session_token = "\$SHA\$RB#" . hash("sha256", hash("sha256", hex2bin($_COOKIE["session_token"])) . "\$SHA256#");

    // Set the required DB query
    $db_query = "DELETE FROM mm_user_sessions WHERE session_token LIKE '$encrypted_session_token'";

    // Call the function and save the results in a variable
    $db_results = db_get_results($db_query);

    // Check if the session token has NOT been deleted in the DB
    if ($db_results != TRUE) {

        // If the session token has NOT been deleted in the DB
        // Redirect to the account page with an error
        header("Location: ../account/?error=delete_session_token");
        exit();
    }

    // Unset local data (cookies)
    setcookie("session_token", "", time() - 3600, "/");
}



// Redirect to the index page
header("Location: ../");
exit();
?>