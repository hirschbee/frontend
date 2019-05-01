<?php
$servername = "localhost";
$username = "id9135203_admin";
$password = "id9135203_guestbook";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>