<?php
// Constants
define("ROOT_DIR", dirname(__DIR__));

// Start the session
session_start();

// Include the DB functions
require_once("db_connection.php");



// Check if a user is not logged in within the session
if (!isset($_SESSION["loggedin"])) {

    // Check if a user is logged in locally (if a cookie is set)
    if (isset($_COOKIE["session_token"])) {

        // Encrypt a locally saved session token
        $encrypted_session_token = "\$SHA\$RB#" . hash("sha256", hash("sha256", hex2bin($_COOKIE["session_token"])) . "\$SHA256#");

        // Set the required DB query
        $db_query = "SELECT user_id FROM mm_user_sessions WHERE session_token LIKE '$encrypted_session_token' LIMIT 1";

        // Call the function and save the results in a variable
        $db_results = db_get_results($db_query);

        // Check if there were any search results in the DB
        if ($db_results && mysqli_num_rows($db_results) > 0) {

            // Convert the result to a string
            $db_results = mysqli_fetch_array($db_results)[0];

            // Set the required DB query
            $db_query = "SELECT * FROM mm_users WHERE user_id LIKE '$db_results' LIMIT 1";

            // Call the function and save the results in a variable
            $db_results = db_get_results($db_query);

            // Check if there were any search results in the DB
            if ($db_results && mysqli_num_rows($db_results) > 0) {

                // Fetch the searched data from the DB server
                $db_data = mysqli_fetch_assoc($db_results);

                // Update the session
                session_regenerate_id();
                $_SESSION["loggedin"] = TRUE;
                $_SESSION["user_firstname"] = $db_data["first_name"];
                $_SESSION["user_lastname"] = $db_data["last_name"];
                $_SESSION["user_email"] = $db_data["email"];
                $_SESSION["user_regdate"] = $db_data["reg_date"];
            }
        }
    }
}
?>