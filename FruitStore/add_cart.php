<?php 
    include "connection.php";
    session_start();
$usingname=$_SESSION['usingname'];
    
    $name="";
    $price=0;
    $picture="";
    $amount=0;

    $sql="SELECT * FROM fruit";
    $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0){//output

        $fields = mysqli_num_fields($result);
        while ($row=mysqli_fetch_array($result)){
            $sub='submit'.$row["FruitName"];
            if(isset($_POST[$sub])){
                $name=$row["FruitName"];	
                $price=$row["BuyerPrice"];
                $picture=$row["FruitName"].".jpg";	
                $amount=1;
                break;
            }
        }

    }
    else{
        echo "0 result";
    }
    
    

    $sql = "select * from fruit where FruitName='$name'";
    $result = mysqli_query($conn, $sql);
    if($row["Inventory"]<=0){
        
        
        echo "<script>alert('Sorry, the item is out of stock.'); location.href=\"store_buyer.php\"</script>";
        
    }
    else{

        $sql = "select * from cart where name='$name'&& username='$usingname'";
        $result = mysqli_query($conn, $sql);
        session_start();
        if(mysqli_num_rows($result)>0){        
            $a = 1;
            $sql ="UPDATE cart SET amount = amount + $a WHERE name = '$name' && username='$usingname'";
            mysqli_query($conn, $sql);
            header("location:store_cart.php");
        }
            
        else{
            if($name){
                $sql = "INSERT INTO `cart` (`username`, `picture`, `name`, `price`,`amount`) VALUES ('$usingname', '$picture', '$name', '$price','$amount')";
                $result = mysqli_query($conn, $sql);
                if($result >0){
                //FIXME: echo success or failure message.
                    echo "Add success";
                    header("location:store_cart.php");
                }
            }   
        }
    }
?>