<?php
// Start the session
session_start();

// Check if a user is not logged in within the session
if (!isset($_SESSION["loggedin"])) {

    // Check if a user is logged in locally (if a cookie is set)
    if (isset($_COOKIE["loggedin"])) {

        // Update the session with the local data (cookies)
        session_regenerate_id();
        $_SESSION["loggedin"] = TRUE;
    }

    // Set navigation links
    $nav_auth = $directory_prefix . "login";
    $nav_account = $directory_prefix . "register";
} else {
    // Set navigation links
    $nav_auth = $directory_prefix . "logout";
    $nav_account = $directory_prefix . "account";
}
?>