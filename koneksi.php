<?php
$servername = "localhost";
$database = "mining";
$username = "root";
$password = "";

// Create connection

$kon = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($kon->connect_error) {
die("Connection failed: " . $kon->connect_error);
}

?>