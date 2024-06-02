<?php
// Start the session
session_start();



// Include the DB functions
include_once("db_connection.php");



$password = "MathMatters#4*pi";
$encrypted_password = "\$SHA#" . hash("sha256", hash("sha256", $password) . "\$SHA256#");

echo "<br>Pass: " . $password;
echo "<br>Encrypted pass: " . $encrypted_password;



echo "<br><br>Current time: " . date("Y-m-d H:i:s");
echo "<br><br>Current time: " . date("d F Y \a\\t H:i:s");
echo "<br><br>30 days ahead: " . date("Y-m-d H:i:s", time() + 60 * 60 * 24 * 30);
echo "<br><br>30 days ahead: " . date("d F Y \a\\t H:i:s", time() + 60 * 60 * 24 * 30);



echo "<br><br><br>Random int: " . random_int(1, pow(2, 48));

$random_bytes = random_bytes(64);
$random_bytes_bin2hex = bin2hex($random_bytes);
$encrypted_random_bytes = "\$SHA\$RB#" . hash("sha256", hash("sha256", $random_bytes) . "\$SHA256#");

echo "<br><br>Random bytes: " . $random_bytes;

echo "<br><br>Random bytes with SHA256: " . $encrypted_random_bytes;

echo "<br><br>Random bytes bin2hex: " . $random_bytes_bin2hex;

echo "<br><br>Random bytes hex2bin: " . hex2bin($random_bytes_bin2hex);



echo "<br><br><br>PHP version: " . phpversion();



echo "<br><br>__DIR__: " . __DIR__;
echo "<br><br>dirname __DIR__: " . dirname(__DIR__);
echo "<br><br>SERVER DOC ROOT: " . $_SERVER['DOCUMENT_ROOT'];
echo "<br><br>SERVER USER AGENT: " . $_SERVER["HTTP_USER_AGENT"] . "<br><br>SERVER REMOTE ADDR: " . $_SERVER["REMOTE_ADDR"];



// Set the required DB query
$db_query = "SELECT user_id FROM mm_users WHERE email LIKE '" . "dvrckovi2@tvz.hr" . "' LIMIT 1";

// Call the function and save the results in a variable
$db_results = db_get_results($db_query);

// Check if there were any search results in the DB
if ($db_results && mysqli_num_rows($db_results) > 0) {

    // Convert the result to a string
    $db_results = mysqli_fetch_array($db_results)[0];

    $db_query = "INSERT INTO mm_user_sessions (user_id, session_token, session_expire_date) VALUES ('$db_results', '$random_bytes_bin2hex', '" . date("Y-m-d H:i:s", time() + 60 * 60 * 24 * 30) . "')";

    echo "<br><br><br>DB query: " . $db_query;
}



?>