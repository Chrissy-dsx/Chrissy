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
    
    
    
    /*if(isset($_POST['submitApple'])){

        $name="apple";	
        $price="29";
        $picture="apple.jpg";	
        $amount=1;
    }
    else if(isset($_POST['submitBanana'])){
        $name="banana";	
        $price="29";
        $picture="banana.jpg";	
        $amount=1;
    }
    else if(isset($_POST['submitCherries'])){
        $name="cherries";	
        $price="29";
        $picture="cherries.jpg";	
        $amount=1;
    }
    else if(isset($_POST['submitOrange'])){
        $name="orange";	
        $price="29";
        $picture="orange.jpg";	
    }
    else if(isset($_POST['submitGrape'])){
        $name="grape";	
        $price="29";
        $picture="grape.jpg";	
        $amount=1;
    }
    else if(isset($_POST['submitnewfruit'])){
        $name="newfruit";	
        $price="100";
        $picture="newfruit.jpg";	
        $amount=1;
    }
    else{
        die();
    }*/

    $sql = "select * from cart where name='$name'&& username='$usingname'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    session_start();
    $n=$row["amount"];
    if($row["amount"]=='1'){
        echo "<script>alert('Amount should larger than 0.'); location.href=\"store_cart.php\"</script>";
    }
    else{
        if(mysqli_num_rows($result)>0){        
            $a = 1;
            $sql ="UPDATE cart SET amount = amount - $a WHERE name = '$name' && username='$usingname'";
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
                    //header("location:store_cart.php");
                }
            }   
        }
    }

?>