<?php

/* Localhost MySQL server 
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "testing";
/* */

// Function for connecting to the DB, performing a query and returning the result
function db_get_results(string $db_query)
{

    // Parse the DB server data from the file
    $database = parse_ini_file(dirname(__DIR__) . "/Protected/config.ini");

    // Check if the DB server data is "false" meaning there is no data or something went wrong
    if ($database == false) {

        // Save the error info
        $_SESSION["error"] = "Failed to parse DB server data. Please try again.";

        // Exit the function with an error value (-1)
        return -1;
    }


    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database["db hostname"],
        $database["db username"],
        $database["db password"],
        $database["db database"]
    );


    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();

        // Exit the function with an error value (-1)
        return -1;
    }


    // Perform a query on the DB and save the results in a variable
    $db_results = mysqli_query($db_connection, $db_query);


    // Close connection to the DB server
    mysqli_close($db_connection);


    // Return the DB query results
    return $db_results;
}

?>