<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "connection.php";

// add
    if (isset($_POST['delete_fruit'])) {
        $Fruit_Name = $_POST['delete_id'];
    
        $sql = "DELETE FROM fruit WHERE FruitName = '$Fruit_Name'";
        if (mysqli_query($conn, $sql)) {
            // echo "Fruit deleted successfully.";
            echo "<script>alert('Fruit deleted successfully. '); location.href=\"Adminpage.php\"</script>";
        } else {
            echo "<script>alert('Error:  . $sql . <br> . mysqli_error($conn); '); location.href=\"Adminpage.php\"</script>";
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // echo "<br><hr><br> Go back to   <a href='Adminpage.php'> Admin Page </a>";
    }
?>
