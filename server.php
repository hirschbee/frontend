<?php
$servername = "sql201.epizy.com";
$username = "epiz_23847122";
$password = "7kG7te4t0";
$db = "epiz_23847122_guestbook";

echo $fName=$_POST["fName"];
echo $lName=$_POST["lName"];
echo $age=$_POST["age"];


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