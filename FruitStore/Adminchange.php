<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "connection.php";

   //change the buying or selling price
   if (isset($_POST['edit'])) {
    // $edit_id = $_POST['edit_id'];
    $edit_Fruit_name = $_POST['edit_name'];
    $edit_selling_price = $_POST['edit_selling_price'];
    $edit_buying_price = $_POST['edit_buying_price'];
    $edit_quantity = $_POST['edit_quantity'];
    if($edit_buying_price>$edit_selling_price){
        $sql = "select * from fruit where FruitName='$edit_Fruit_name'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){ 
            $sql = "UPDATE fruit SET SellerPrice = $edit_selling_price, BuyerPrice = $edit_buying_price, Inventory = $edit_quantity WHERE  FruitName = '$edit_Fruit_name'";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Fruit information updated successfully. '); location.href=\"Adminpage.php\"</script>";
                // echo "Fruit information updated successfully.";
            } else {
                echo "<script>alert('Error:  . $sql . <br>. mysqli_error($conn); '); location.href=\"Adminpage.php\"</script>";
                // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            // echo "<br><hr><br> Go back to   <a href='Adminpage.php'> Admin Page </a>";
        }
        else{
            echo "<script>alert('The Fruit Name does not found.'); location.href=\"Adminpage.php\"</script>";
        }
    
   
    }
else{
    echo "<script>alert('Warning!!! buying price must bigger than  selling price '); location.href=\"Adminpage.php\"</script>";
    // echo "Warning!!! selling price must bigger than  buying price";
    // echo "<br><hr><br> Go back to   <a href='Adminpage.php'> Admin Page </a>";
}
    }
?>
