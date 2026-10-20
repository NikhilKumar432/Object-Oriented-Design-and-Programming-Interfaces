<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
?>
