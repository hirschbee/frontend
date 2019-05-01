<?php
$servername = "files.000webhost.com";
$username = "hirschbaeck";
$password = "obupno44";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>