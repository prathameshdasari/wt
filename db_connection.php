<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default password is empty for XAMPP
$database = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
