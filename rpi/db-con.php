<?php
$servername = "localhost";
$username = "nadhem";
$password = "";
$dbname = "rpi_themo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>