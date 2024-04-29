<?php
// Start the session
session_start();



// Include the DB functions
include_once("db_connection.php");



// Check if the request method is not of type POST
if (!($_SERVER["REQUEST_METHOD"] == "POST")) {

    // Redirect a user to the register page
    header("Location: ../register");
    exit();
}



// Check if $_POST super global variables are set to NULL
// Fixes "Undefined array key" error
if (!isset($_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["password"], $_POST["repeat_password"])) {

    // Redirect a user to the register page with a "invalid credentials" error
    header("Location: ../register/?error=invalid_credentials");
    exit();
}



// Check if password and repeat password are the same
if ($_POST["password"] !== $_POST["repeat_password"]) {

    // Redirect a user to the register page with a "passwords do not match" error
    header("Location: ../register/?error=passwords_no_match");
    exit();
}



// Set the required DB query
$db_query = "SELECT * FROM mm_users WHERE email LIKE '" . $_POST["email"] . "' LIMIT 1";

// Call the function and save the results in a variable
$db_results = db_get_results($db_query);

// Check if there were any search results in the DB
if ($db_results && mysqli_num_rows($db_results) > 0) {

    // If the entered email is registered in the DB
    // Redirect to the register page with an "already exists" error
    header("Location: ../register/?error=already_exists");
    exit();
}

// Check if there is an error with the DB connection
if (isset($_SESSION["error"])) {

    // Redirect a user to the register page with a "database connection" error
    header("Location: ../register/?error=db_connection");
    exit();
}



// Encrypt a provided password
$encrypted_password = "\$SHA#" . hash("sha256", hash("sha256", $_POST["password"]) . "\$SHA256#");



// Set the required DB query
$db_query = "INSERT INTO mm_users (first_name, last_name, email, password) VALUES ('" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "', '" . $_POST["email"] . "', '$encrypted_password')";

// Call the function and save the results in a variable
$db_results = db_get_results($db_query);

// Check if there is an error with the DB connection
if (isset($_SESSION["error"])) {

    // Redirect a user to the register page with a "database connection" error
    header("Location: ../register/?error=db_connection");
    exit();
}



// Check if the user has been registered in the DB
if ($db_results == TRUE) {

    // Update the session
    session_regenerate_id();
    $_SESSION["loggedin"] = TRUE;
    $_SESSION["user_firstname"] = $_POST["first_name"];
    $_SESSION["user_lastname"] = $_POST["last_name"];
    $_SESSION["user_email"] = $_POST["email"];
    $_SESSION["user_regdate"] = date("Y-m-d H:i:s");

    // Redirect to the index page
    header("Location: ../");
    exit();
} else {
    // If the user has not been registered in the DB
    // Redirect to the register page with an error
    header("Location: ../register/?error=register");
    exit();
}
?>