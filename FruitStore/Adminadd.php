<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "connection.php";

// add
if (isset($_POST['add_fruit'])) {
    $new_FruitID= $_POST['FruitID'];
    $new_fruit = $_POST['new_fruit'];
    $new_selling_price = $_POST['new_selling_price'];
    $new_buying_price = $_POST['new_buying_price'];
    $new_quantity = $_POST['new_quantity'];
    if($new_buying_price>$new_selling_price){
        $sql = "select * from fruit where FruitName='$new_fruit'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){ 
            echo "<script>alert('Warning!!!!! The fruit has been added'); location.href=\"Adminpage.php\"</script>";
        }
        else{
        $sql = "INSERT INTO fruit (FruitID,FruitName, BuyerPrice, SellerPrice, Inventory) VALUES ($new_FruitID,'$new_fruit', $new_buying_price ,$new_selling_price, $new_quantity)";
        if (mysqli_query($conn, $sql)) {
        // echo "New fruit added successfully.";
        echo "<script>alert('New fruit added successfully. '); location.href=\"Adminpage.php\"</script>";
        } 
       else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('Error:  . $sql . <br> . mysqli_error($conn)'); location.href=\"Adminpage.php\"</script>";
      }
    }
    // echo "<br><hr><br> Go back to   <a href='Adminpage.php'> Admin Page </a>";
      }
    else{
        echo "<script>alert('Warning!!! buying price must bigger than selling price '); location.href=\"Adminpage.php\"</script>";
        // echo "Warning!!! selling price must bigger than  buying price";
        // echo "<br><hr><br> Go back to   <a href='Adminpage.php'> Admin Page </a>";
    }
}
?>
