<!DOCTYPE html>
<html>
<head>
    <title>RECEIPT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 0.5em;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>RECEIPT</h1>
    
    <?php  
        session_start();
        $usingname=$_SESSION['usingname'];
    ?>
   
    
    <p><?php echo date('Y-m-d'); ?></p>
    <p>Username: <?php echo $usingname; ?></p>

    <h2>Fruit List</h2>
    <table>
        <tr>
            <th>Fruit Type</th>
            <th>Price per kg</th>
            <th>Amount</th>
            <th>Total</th>
        </tr>
        <?php
        include"connection.php";
        
        $sql="SELECT * FROM cart_seller WHERE username='$usingname'";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            while($row=$result->fetch_assoc()){
                $cart_items[]=array(
                    "type"=>$row["name"],
                    "price"=>$row["price"],
                    "amount"=>$row["amount"]
                ); 
            }
            $result->free();
        }
        else{
            echo "No results found.";
        }
        ?>
        <?php
        $total_price = 0;
        if(!empty($cart_items)){
            foreach ($cart_items as $fruit) {
                $fruit_price = $fruit["price"];
                $fruit_amount = $fruit["amount"];
                $fruit_total_price = $fruit_price * $fruit_amount;
                $total_price += $fruit_total_price;
                $fruit_name=$fruit["type"];
                
                
                //update fruit
                if ($fruit_amount > 0) {
                    $sql="SELECT * FROM fruit WHERE FruitName='$fruit_name'";
                    $result=mysqli_query($conn, $sql);
                    $fields = mysqli_num_fields($result);
                    $row=mysqli_fetch_array($result);
                        $sql = "UPDATE fruit SET Inventory = Inventory + $fruit_amount WHERE FruitName = '$fruit_name'";
                        mysqli_query($conn, $sql);
                        
                       
                }

                echo "<tr>";
                echo "<td>{$fruit['type']}</td>";
                echo "<td>{$fruit_price}</td>";
                echo "<td>{$fruit_amount}</td>";
                echo "<td>{$fruit_total_price}</td>";
                echo "</tr>";

                //check cash flow
                $sql="SELECT * FROM cash_flow";
                $result=mysqli_query($conn, $sql);
                $fields = mysqli_num_fields($result);
                $row=mysqli_fetch_array($result);
                $cash_flow=$row["total"];
                if($cash_flow-$fruit_total_price<0){
                    echo "<script>alert('Sorry, we cannot buy that much from you now. '); location.href=\"[store_cart].php\"</script>";
                }
                //update cash flow
                else{
                    $sql = "UPDATE cash_flow SET total = total - $fruit_total_price";
                    mysqli_query($conn, $sql);
                     //delete cart
                     $sql="DELETE FROM cart_seller WHERE username='$usingname'";
                     mysqli_query($conn, $sql);
                     
                    //  echo "DELETE:".$usingname;
                }

            }
        }
        else{
            echo "Cart is empty";
        }

        ?>
    </table>
    <h2>TOTAL PRICE</h2>
    <table>
        <tr>
            <td class="total">TOTAL PRICE</td>
            <td class="total"><?php echo $total_price; ?></td>
        </tr>
    </table>   

    <a href="[store_seller].php"><button>back</button></a>
</body>
</html>