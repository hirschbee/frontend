<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$db = "friends";

echo $fName=$_POST["fName"]."<br>";
echo $lName=$_POST["lName"]."<br>";
echo $age=$_POST["age"]."<br>";
echo "<a href='index.html'>home</a><br>";


$conn = mysqli_connect($servername, $username, $password);

 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO guests(fName, lName, age)
VALUES ('$fName', '$lName', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>