<?php

$host = "localhost:3307";
$username = "root";
$password = "localhost";
$database = "DS1";

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error) {
    die("Error connecting database".$conn->connect_error);
}

echo "Database connected successfully<br>";

?>