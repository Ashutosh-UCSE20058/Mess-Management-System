<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "messmanagement";

// Take input from the HTML form

$name = $_POST['name'];
$roll = $_POST['roll'];
//$age = (int)$_POST["age"];
$course = $_POST['course'];
$year = $_POST['year'];
$phone = (int)$_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO messentry (name,roll,course,year,phone,email,gender)
VALUES ('$name', '$roll', '$course', '$year', '$phone', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>