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
    

    $sql = "select * from cart_seller where name='$name'&& username='$usingname'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    session_start();
    $n=$row["amount"];
    if($row["amount"]=='1'){
        echo "<script>alert('Inventory should larger than 0.'); location.href=\"[store_cart].php\"</script>";
    }
    else{
        if(mysqli_num_rows($result)>0){        
            $a = 1;
            $sql ="UPDATE cart_seller SET amount = amount - $a WHERE name = '$name' && username='$usingname'";
            mysqli_query($conn, $sql);
            header("location:[store_cart].php");
        }
            
        else{
            if($name){
                $sql = "INSERT INTO `cart_seller` (`username`, `picture`, `name`, `price`,`amount`) VALUES ('$usingname', '$picture', '$name', '$price','$amount')";
                $result = mysqli_query($conn, $sql);
                if($result >0){
              
                    echo "Add success";
                    
                }
            }   
        }
    }

?>