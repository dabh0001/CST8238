<?php
$host = "localhost";
$username = "dabhcom_eatery";
$password = "m$2Szghm9*e";
$database = "dabhcom_eatery";

// Create connection
$connection = new mysqli ( $host, $username, $password, $database );

// Check connection
if ($connection->connect_errno) {
	die ( "Connection failed: " . $connection->connect_error );
} else {
	echo "Connected successfully";
}

?>
