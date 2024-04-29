<?php
// Start the session
session_start();



// Include the DB functions
include_once("db_connection.php");



// Check if the request method is not of type POST
if (!($_SERVER["REQUEST_METHOD"] == "POST")) {

    // Redirect a user to the login page
    header("Location: ../login");
    exit();
}



// Check if $_POST super global variables are set to NULL
// Fixes "Undefined array key" error
if (!isset($_POST["email"], $_POST["password"])) {

    // Redirect a user to the login page with a "invalid credentials" error
    header("Location: ../login/?error=invalid_credentials");
    exit();
}



// Set the required DB query
$db_query = "SELECT * FROM mm_users WHERE email LIKE '" . $_POST["email"] . "' LIMIT 1";



// Call the function and save the results in a variable
$db_results = db_get_results($db_query);



// Check if there is an error with the DB connection
if (isset($_SESSION["error"])) {

    // Redirect a user to the login page with a "database connection" error
    header("Location: ../login/?error=db_connection");
    exit();
}



// Check if the provided email is not in the DB
if (!($db_results && mysqli_num_rows($db_results) > 0)) {

    // Redirect a user to the login page with a "unknown email" error
    header("Location: ../login/?error=unknown_email");
    exit();
}



// Fetch the searched data from the DB server
$db_data = mysqli_fetch_assoc($db_results);



// Encrypt a provided password
$encrypted_password = "\$SHA#" . hash("sha256", hash("sha256", $_POST["password"]) . "\$SHA256#");



// Check if the provided (encrypted) password does not match the one in the DB
if (!($encrypted_password === $db_data["password"])) {

    // Redirect a user to the login page with a "wrong password" error
    header("Location: ../login/?error=wrong_password");
    exit();
}



// Update the session
session_regenerate_id();
$_SESSION["loggedin"] = TRUE;
$_SESSION["user_firstname"] = $db_data["first_name"];
$_SESSION["user_lastname"] = $db_data["last_name"];
$_SESSION["user_email"] = $db_data["email"];
$_SESSION["user_regdate"] = $db_data["reg_date"];



// Redirect a user to the index page
header("Location: ../");
exit();
?>