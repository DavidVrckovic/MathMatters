<?php

$password = "MathMatters#4*pi";
$encrypted_password = "\$SHA#" . hash("sha256", hash("sha256", $password) . "\$SHA256#");

echo "Pass: " . $password;
echo "<br>Encrypted pass: " . $encrypted_password;



echo "<br><br>Current time: " . date("Y-m-d H:i:s");
echo "<br><br>Current time: " . date("d F Y \a\\t H:i:s");



echo "<br><br>Random int: " . random_int(1, pow(2, 48));
echo "<br><br>Random bytes: " . random_bytes(32);
echo "<br><br>Random bytes: " . bin2hex(random_bytes(32));

?>