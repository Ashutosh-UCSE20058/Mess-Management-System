<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "cafeteria";

$username = $_POST['username'];
$password = $_POST['pass'];
$name = $_POST['name'];

$connect = new mysqli($servername,$username,$password,$dbname);

if($connect->connect_error){
    die("Connection failed: ".$connect->connect_error);
}

$sql = "INSERT INTO adminlogin ( username,password,name)
VALUES ('$username','$pass','$name')";

if($conn->query($sql)===TRUE){
    echo "New Record Created Successfully";
}
else{
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>