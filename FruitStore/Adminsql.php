<?php
Check if the HTML form submission button named register is pressed
    // if(isset($_POST['register'])) {                //according to the login page
        $servername = "stuweb.bcrab.cn"; // if use uic server, change to db.bcrab.cn
        $username = "dpair48";  // change to your account
        $password = "JaVzTBay";	  // change to your account
        $db = "dpair48";	  // change to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Check if connection was successful
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        } 
        Fetch inventory data from the database
    $sql = "SELECT * FROM fruit";
    $result = $conn->query($sql);

   //add
    if (isset($_POST['add_fruit'])) {
        $new_fruit = $_POST['new_fruit'];
        $new_quantity = $_POST['new_quantity'];
        $new_selling_price = $_POST['new_selling_price'];
        $new_buying_price = $_POST['new_buying_price'];
    
        $sql = "INSERT INTO fruit (fruit, quantity, selling_price, buying_price) VALUES ('$new_fruit', $new_quantity, $new_selling_price, $new_buying_price)";
        if (mysqli_query($conn, $sql)) {
            echo "New fruit added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }



    //delete
    if (isset($_POST['delete_fruit'])) {
        $delete_id = $_POST['delete_id'];
    
        $sql = "DELETE FROM inventory WHERE id = $delete_id";
        if (mysqli_query($conn, $sql)) {
            echo "Fruit deleted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }


    //change the buying or selling price
    if (isset($_POST['edit'])) {
        $edit_id = $_POST['edit_id'];
        $edit_selling_price = $_POST['edit_selling_price'];
        $edit_buying_price = $_POST['edit_buying_price'];
        $edit_quantity = $_POST['edit_quantity'];
    
        $sql = "UPDATE inventory SET selling_price = $edit_selling_price, buying_price = $edit_buying_price, quantity = $edit_quantity WHERE id = $edit_id";
        if (mysqli_query($conn, $sql)) {
            echo "Fruit information updated successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }



    // Keep track of cash flow
    // $cash_flow = 1000;
    // //buy or sell
    // if (isset($_POST['buy'])) {
    //     $buy_id = $_POST['buy_id'];
    //     $buy_quantity = $_POST['buy_quantity'];
    //     $buying_price = $inventory[$buy_id]['buying_price'];
    //     $total_purchase_price = $buy_quantity * $buying_price;
    
    //     // Check if cash flow will be negative after the purchase
    //     if ($cash_flow - $total_purchase_price < 0) {
    //         echo "Sorry, we cannot buy that much from you now.";
    //     } else {
    //         $cash_flow += $total_purchase_price;
    
    //         // Update 
    //         $inventory[$buy_id]['quantity'] -= $buy_quantity;
    
    //         echo "bug successful.";
    //     }
    // }
    // if (isset($_POST['sell'])) {
    //     $sell_id = $_POST['sell_id'];
    //     $sell_quantity = $_POST['sell_quantity'];
    //     $selling_price = $inventory[$sell_id]['selling_price'];
    //     $total_selling_price = $sell_quantity * $selling_price;
    
    //     $cash_flow -= $total_selling_price;
    
    //     // Check if cash flow becomes negative
    //     if ($cash_flow < 0) {
    //         echo "Sorry, we cannot buy that much from you now.";
    //         $cash_flow += $total_selling_price; // Add the deducted amount back to cash flow
    //     } else {
    //         // Update inventory quantity
    //         $inventory[$sell_id]['quantity'] += $sell_quantity;
    
    //         echo "Sale successful.";
    //     }
    // }
    




 // Keep track of cash flow
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);            //if there is a cash flow in database then use it
        $cash_flow = $row['amount'];
    } else {
        // If no record exists, initialize cash flow to 1000
        $cash_flow = 1000;
    
        // Insert initial cash flow amount into the database
        $sql = "INSERT INTO cash_flow (amount) VALUES ($cash_flow)";
        mysqli_query($conn, $sql);
    }

    // Update the buyer or seller pages
    if (isset($_POST['buy'])) {
        $buy_id = $_POST['buy_id'];
        $buy_quantity = $_POST['buy_quantity'];
        $buying_price = $inventory[$buy_id]['buying_price'];
        $total_purchase_price = $buy_quantity * $buying_price;
    
        // Check if cash flow will be negative after the purchase
        if ($cash_flow - $total_purchase_price < 0) {
            echo "Sorry, we cannot buy that much from you now.";
        } else {
            $cash_flow += $total_purchase_price;
    
            // Update inventory quantity
            $inventory[$buy_id]['quantity'] -= $buy_quantity;
    
            // Update cash flow amount in the database
            $sql = "UPDATE cash_flow SET amount = $cash_flow";
            mysqli_query($conn, $sql);
    
            echo "Buy successful.";
        }
    }
    
    if (isset($_POST['sell'])) {
        $sell_id = $_POST['sell_id'];
        $sell_quantity = $_POST['sell_quantity'];
        $selling_price = $inventory[$sell_id]['selling_price'];
        $total_selling_price = $sell_quantity * $selling_price;
    
        $cash_flow -= $total_selling_price;
    
        // Check if cash flow becomes negative
        if ($cash_flow < 0) {
            echo "Sorry, we cannot buy that much from you now.";
            $cash_flow += $total_selling_price; // Add the deducted amount back to cash flow
        } else {
            // Update cash flow amount in the database
            $sql = "UPDATE cash_flow SET amount = $cash_flow";
            mysqli_query($conn, $sql);
    
            // Update inventory quantity
            $inventory[$sell_id]['quantity'] += $sell_quantity;
    
            echo "Sale successful.";
        }
    }
    
    // Display the cash flow amount

    // echo "<h2>Cash Flow: ".$cash_flow." RMB</h2>";


    $conn->close();
?>