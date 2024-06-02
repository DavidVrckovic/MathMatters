<?php
require_once('../google-api-php-client--PHP8.0/vendor/autoload.php');

// Create Client Request to access Google API
$google_client = new Google\Client();
$google_client->setAuthConfig('../Protected/google_social_login_config.json');
$google_client->addScope("email", "profile");

// Authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $_SESSION['google_token'] = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
    $google_client->setAccessToken($_SESSION['google_token']);

    /* Get profile info
    $google_oauth = new Google_Service_Oauth2($google_client);
    $google_account_info = $google_oauth->userinfo->get();
    $email = $google_account_info->email;
    $name = $google_account_info->name;
    */

    if ($google_client->getAccessToken()) {
        $_SESSION['google_token_data'] = $google_client->verifyIdToken();
    }

    if (isset($_SESSION['google_token_data'])) {

        // Set the required DB query
        $db_query = "SELECT * FROM mm_users WHERE email LIKE '" . $_SESSION['google_token_data']['email'] . "' LIMIT 1";

        // Call the function and save the results in a variable
        $db_results = db_get_results($db_query);

        // Check if there is an error with the DB connection
        if (isset($_SESSION["error"])) {

            // Redirect a user to the login page with a "database connection" error
            header("Location: ../login/?error=db_connection");
            exit();
        }

        // Check if the provided email is NOT in the DB
        if (!($db_results && mysqli_num_rows($db_results) > 0)) {

            // Redirect a user to the login page with a "unknown email" error
            header("Location: ../login/?error=unknown_email");
            exit();
        }

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

    // Redirect a user to the account page
    header("Location: ../account");
    exit();
}
?>