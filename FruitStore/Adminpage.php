<html>
<head>
    <title>
        Admin
    </title>
    <link rel="stylesheet" href="div.css"/> <!-- external css file -->
</head>

<body style="background-color:#FFFAFA">
<style>
    .body{
        width: 220px;
        height: 306px;
        position: relative;
        /* top:100px; */
        /* left: 100px; */
        display: inline-block;
    }
    </style>
<center>
    <h1>Admin</h1>
    </center>
    <!-- display the cash flow -->
    <?php
include "connection.php";

$sql = "SELECT * FROM cash_flow";
$result = $conn->query($sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $cash_flow = $row['total'];
        echo '<div class="div22">
            <h2>Cash Flow: '.$cash_flow.' RMB</h2>
        </div>';
    }
} else {
    echo "Error retrieving cash flow from the database.";
}

$conn->close();
?>
<div style="margin-left:1500px;">
<h2><a href="Login.php">log out</a></h2>
</div>

    <!-- <div class="div6">
        SELL
        <br><br>
        PURCHASE

    </div> -->

   

<div class="div19">
                <h2><center>Change Fruit</center></h2>
                <br>
                <form action="Adminchange.php" method="post" style="margin-left:15px">
                    <!-- Fruit id: <input class="div20" type="text" id="addPurchase" placeholder="Fruit id" name="edit_id">
                    <br><br>  -->
                    Fruit name: <input class="div20" type="text" id="addPurchase" placeholder="Fruit name" name="edit_name" required>
                    <br><br>
                    New Sale price: <input class="div20" type="text" id="addPurchase" placeholder="New Sale  Price" name="edit_selling_price" required>
                    <br><br>
                    New Purchasing Price: <input class="div20" type="text" id="addPurchase" placeholder="New Purchasing Price" name="edit_buying_price" required>
                    <br><br>
                    New Amount: <input class="div20" type="text" id="addPurchase" placeholder="New Amount" name="edit_quantity" required>
                    <br><br><br><br>
                    <center>
                        <input class="div18" type="submit" name="edit" value="CHANGE">
                    </center>

                </form>

            </div>
    <div class="div15">
        <h2>Add Fruit</h2>
        <br><br>
        <form action="Adminadd.php" method="post">
            Fruit ID: <input class="div17" type="text" id="addName" placeholder="FruitID" name="FruitID" required>
            <br><br>
            Fruit Name: <input class="div17" type="text" id="addName" placeholder="Fruit Name" name="new_fruit" required>
            <br><br><br>
            Selling Price: <input class="div17" type="text" id="addSell" placeholder="Selling Price" name="new_selling_price" required>
            <br><br><br>
            Purchasing Price: <input class="div17" type="text" id="addPurchase" placeholder="Purchasing Price" name="new_buying_price" required>
            <br><br><br>
            Quantity: <input class="div17" type="text" id="addQuantity" placeholder="Quantity" name="new_quantity" required>

            <!-- <section class="upload-section">

                <article class="upload-piclist">

                    <div class="upload-file">

                        <input type="file" id="file" accept="image/*" multiple onchange="imgChange()"/>

                    </div>

                </article>


            </section> -->
            <br><br>
            <input  class="div18" type="submit" name="add_fruit" value="add">
        </form>
    </div>

    <div class="div16">
        <h2>Delete Fruit</h2>
        <br><br>Choose one fruit you want to delete<br><br>
        <form action="Admindelete.php" method="post">
        Fruit Name:<input class="div21" type="text" id="addName" placeholder="Fruit Name" name="delete_id" required>
            <br><br>
            <input class="div18" type="submit" name="delete_fruit" value="Delete">
        </form>
    </div>


    <!-- <div class="div1">
        <img src="apple.jpg" width="100" height="100" alt="apple">
        <br>
        Apple<br><br>
        10/kg<br><br>
        ?<br>
    </div>

    <div class="div2">
        <img src="banana.jpg" width="150" height="100" alt="banana">
        <br>
        Banana<br><br>
        15/kg<br><br>
        ?/kg<br>
    </div>

    <div class="div3">
        <img src="cherries.jpg" width="100" height="100" alt="cherry">
        <br>
        Cherry<br><br>
        30/kg<br><br>
        ?/kg<br>
    </div>

    <div class="div4">
        <img src="orange.jpg" width="100" height="100" alt="orange">
        <br>
        Orange<br><br>
        20/kg<br><br>
        ?/kg<br>
    </div>

    <div class="div5">
        <img src="grape.jpg" width="100" height="100" alt="grape">
        <br>
        Grape<br><br>
        20/kg<br><br>
        ?/kg<br>
    </div> -->
<!-- //sql -->
<?php
    include "connection.php";
// Check if the HTML form submission button named register is pressed
    // if(isset($_POST['register'])) {                //according to the login page
        // $servername = "stuweb.bcrab.cn"; // if use uic server, change to db.bcrab.cn
        // $username = "dpair48";  // change to your account
        // $password = "JaVzTBay";	  // change to your account
        // $db = "dpair48";	  // change to your database name

        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $db);

        // // Check if connection was successful
        // if ($conn->connect_error){
        //     die("Connection failed: " . $conn->connect_error);
        // } 
        // Fetch inventory data from the database
   $sql = "SELECT * FROM fruit";
    $result = $conn->query($sql);
    if ($result) {
        $fields = mysqli_num_fields($result);
        // echo"<table>"
        while ($row=mysqli_fetch_array($result)){
            echo "
            
                <div class=\"body\">
                    <div>
                        <img src=\"pic/".$row["FruitName"].".jpg\" width=\"200px\" height=\"200px\">
                    </div>
                    <div>
                        ".$row["FruitName"]."
                    </div>
                    <div>
                    BuyerPrice: ".$row["BuyerPrice"]."/kg
                    </div>
                    <div>
                    SellerPrice: ".$row["SellerPrice"]."/kg
                    </div>
                    <div>
                        Amount: ".$row["Inventory"].";
                    </div>
                </div>
                </table>
                ";
        }
        // echo"</table>"
    }
    else{
        echo "0 result";
    }
    //delete


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
    



    $conn->close();
?>







</body>
</html>