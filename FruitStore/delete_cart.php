<?php 
    include "connection.php";
    
    session_start();
    $usingname=$_SESSION['usingname'];

    $sql="SELECT * FROM fruit";
    $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0){//output

        $fields = mysqli_num_fields($result);
        while ($row=mysqli_fetch_array($result)){
            $del='submitDelete'.$row["FruitName"];
            if(isset($_POST[$del])){
                $name=$row["FruitName"];	
                break;
            }
        }

    }
    else{
        echo "0 result";
    }
    
    
    /*if(isset($_POST['submitDeleteapple'])){
        $name="apple";	
    }
    else if(isset($_POST['submitDeletebanana'])){
        $name="banana";	
    }
    else if(isset($_POST['submitDeletecherries'])){
        $name="cherries";	
    }
    else if(isset($_POST['submitDeleteorange'])){
        $name="orange";	
    }
    else if(isset($_POST['submitDeletegrape'])){
        $name="grape";	
    }
    else{
        die();
    }
    */
    if($name){
        $sql = "DELETE FROM cart WHERE name='$name'";
        $result = mysqli_query($conn, $sql);
        if($result >0){
        //FIXME: echo success or failure message.
            header("location:store_cart.php");
        }
    }

?>