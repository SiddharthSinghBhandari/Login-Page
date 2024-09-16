<?php
$host= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "login";
$table= "users";
//creating connection
$con= new mysqli ($host,$dbusername,$dbpassword,$dbname);

//checking connection

if ($con->connect_error) {
	die("Connection failed");
}

else {
	echo "connection success";
}

$username= $_POST["username"];
$password= $_POST["password"];

$sql= "INSERT INTO $table (username , password) values ('$username','$password')";

if($con->query($sql)) {
	echo"<h1>new record successfull</h1>";
}
else {
	echo "error";
}

$con->close();
?>