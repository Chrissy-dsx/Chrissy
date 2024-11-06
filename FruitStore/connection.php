<?php 
// FIXME: change to your own details

// (1) Using DB in local XAMPP server
//$servername = "localhost";
//$username 	= "root";	// for local host
//$password 	= "";		// for local host
//$db = "store";	// change to the database name in your local XAMPP

// (2) Using DB in db.bcrab.cn
$servername = "stuweb.bcrab.cn";
$username = "dpair48";	// change XXXXX to your account's
$password = "JaVzTBay";	// change XXXXX to your account's
$db = "dpair48";// change to the database name in db.bcrab.cn

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 
?>