<?php
include"connection.php";

$user	= $_POST["placeholder1"];
$pwd	= $_POST["placeholder2"];
$type   = $_POST["radio"];


$sql = "SELECT * FROM users where username = '$user'&& password='$pwd'&& usertype='$type'";

$result = mysqli_query($conn, $sql);

session_start();
$_SESSION['usingname']=$user;
if(empty($user)) {
    echo "Username can't be blank!";
    header("Location: Login.php");
    exit;
  }
else if(empty($pwd)){
    echo "Password can't be blank!";
    header("Location: Login.php");
    exit;
}
else if(empty($type)){
    echo "User type can't be blank!";
    header("Location: Login.php");
    exit;
}
else if(mysqli_num_rows($result)>0){
    if($type=="buyer"){
        header('Location:store_buyer.php');
        exit;
    }
    else if($type=="admin"){
        header('Location:Adminpage.php');
        exit;
    }
    else if($type=="seller"){
        header('Location:[store_seller].php');
        exit;
    }
    else{
        exit;
    }
}
else{
	echo "Failure to login!";
    echo "<br><hr><br> Go to   <a href='Register.php'> Register Page</a>";
    echo "<br><hr><br><a href='Login.php'>Go Back</a>";
}
?>
