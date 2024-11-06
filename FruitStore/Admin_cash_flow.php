<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "connection.php";

   //change the buying or selling price
  // Keep track of cash flow
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);            //if there is a cash flow in database then use it
    $cash_flow = $row['total'];
} else {
    // If no record exists, initialize cash flow to 1000
    $cash_flow = 1000;

    // Insert initial cash flow amount into the database
    $sql = "INSERT INTO cash_flow (amount) VALUES ($cash_flow)";
    mysqli_query($conn, $sql);
}

// Update the buyer or seller pages
if (isset($_POST['buy'])) {
    $amount= $_POST['amount'];
    $buy_id = $_POST['FruitID'];
    $buy_quantity = $_POST['Inventory'];
    $buying_price = $inventory[$buy_id]['Inventory'];
    $total_purchase_price = $buy_quantity * $buying_price;

    // Check if cash flow will be negative after the purchase
    if ($cash_flow - $total_purchase_price < 0) {
        echo "Sorry, we cannot buy that much from you now.";
    } else {
        $cash_flow += $total_purchase_price;

        // Update inventory quantity
        $inventory[$buy_id]['Inventory'] += $buy_quantity;

        // Update cash flow amount in the database
        $sql = "UPDATE cash_flow SET total = $cash_flow";
        mysqli_query($conn, $sql);

        echo "Buy successful.";
    }
    echo "<br><hr><br> Go back to   <a href='store_cart.php'> Home </a>";
}

if (isset($_POST['sell'])) {
    $amount= $_POST['amount'];
    $sell_id = $_POST['FruitID'];
    $sell_quantity = $_POST['Inventory'];
    $selling_price = $inventory[$sell_id]['Inventory'];
    $total_selling_price = $sell_quantity * $selling_price;

    $cash_flow -= $total_selling_price;

    // Check if cash flow becomes negative
    if ($cash_flow < 0) {
        echo "Sorry, we cannot buy that much from you now.";
        $cash_flow += $total_selling_price; // Add the deducted amount back to cash flow
    } else {
        // Update cash flow amount in the database
        $sql = "UPDATE cash_flow SET total = $cash_flow";
        mysqli_query($conn, $sql);

        // Update inventory quantity
        $inventory[$sell_id]['Inventory'] -= $sell_quantity;

        echo "Sale successful.";
    }
    echo "<br><hr><br> Go back to   <a href='Adminpage.php'> Admin Page </a>";
}
    // Display the cash flow amount



    echo "<br><hr><br> Go back to   <a href='Adminpage.php'> Admin Page </a>";
?>
