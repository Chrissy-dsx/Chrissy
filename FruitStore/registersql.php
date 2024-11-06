<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "stuweb.bcrab.cn"; 
$username = "dpair48";  
$password = "JaVzTBay";	  
$db = "dpair48";	  

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 

$userName = $_POST['placeholder1'];
$pass = $_POST['placeholder2'];
$userType = $_POST["radio"];

$sql = "SELECT * FROM users WHERE username = '$userName' AND password = '$pass' AND username = '$userType'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "The username and password already exist in the database.<br>";
    echo "Go to <a href='register.php'>Registration Page</a>";
} else {
    $newSql = "INSERT INTO  users (username, password, usertype) VALUES ('$userName', '$pass', '$userType')";
    $result = mysqli_query($conn, $newSql);
    
    if($result) {
        echo "Registration successful.<br>";
        echo "Go to <a href='Login.php'>Login Page</a>";
    } else {
        echo "Registration failed.<br>";
        echo "Go to <a href='register.php'>Registration Page</a>";
    }
}

$conn->close();
?>
