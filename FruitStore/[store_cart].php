<?php
    include "connection.php";
    session_start();
    $usingname=$_SESSION['usingname'];
?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
</head>

<body style="
    min-width: 1190px;
">
    <style>
    /*header*/
    .header{
        width: 100%;
        height: 60px;
        line-height: 40px;
        background-color: rgb(34, 170, 86);
        color: yellow;
        font-size: 12px;
    }
    .wrap{
        width:1226px ;
        margin:0 auto;
    }
    .header-left{
        float: left;
    }
    .header-right{
        float: right;
        font-size: 17px;
        position: absolute;
        left: 987px;
    }
    .header li{
        position: relative;
        float: left;
        list-style-type: none;
    }
    .header a{
        color: yellow;
    }
    .header a:hover{
        color: #fff;
    }
    .header span{
        color: yellow;
        margin: 0 10px;
    }
    
    /*navigation*/
    .nav{
    position: relative;
    width: 100%;
    height: 65px;
    background-color: #fff;
    }
    .nav li{
    position: absolute;
    top: 19px;
    left: 326px;
    list-style-type: none;
    font-size: 21px;
    }

    .nav a{
        color:rgb(34, 170, 86);
        width: 145px;
    }
    .nav a:hover{
        color: #fff;
    }
    .nav span{
        color: #db2d22;
        margin: 0 10px;
    }
    .nav-bar{
    width: 100%px;
    height: 100px;
    float: left;
    padding-left: 172px;
    box-sizing: border-box;
    }
    .logo{
    width: 62px;
    height: 56px;
    float: left;
    margin-top: 22px;
    text-align: left;
    position: absolute;
    left: 34px;
    top: -4px;
    float: left;
    }
    .logo img{
    width: 96px;
    }
    .cart_price{
       float: left;
    display: block;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    color: #db2d22;
    position: absolute;
    top: 8px;
    left: 33px;
    width: 190px;
    }
    
    /*small cart*/
    .cart_price{
       float: left;
    display: block;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    color: #db2d22;
    position: absolute;
    top: 8px;
    left: 33px;
    width: 190px;
    }
    .cart{
        float: right;
        background-color: #ffb900;
        width: 193px;
        height: 43px;
        position: absolute;
        left: 975px;
        top: 13px;
    }

    /*body_main*/
    .body_main{
        background-color: #f5f1ee;
        width: 100%;
        height: 677px;
    }
    
    /*body_cart*/
    
    .body_cart_header{
        width:100%;
        height:30px;
        background-color: #db2d22;
    }

    .body_cart_header_pic{
        position: relative;
        left: -160px;
        top: 1px;
        font-size: 20px;
        color:#db2d22;
    }
    .body_cart_header_name{
        position: relative;
        left: 433px;
        top: -45px;
        font-size: 20px;
        z-index:300;
    }   
    .body_cart_header_price{
        position: relative;
        left: 542px;
        top: -91px;
        font-size: 20px;
        z-index:300;
    }
    .body_cart_header_amount{
        position: relative;
        left: 680px;
        top: -138px;
        font-size: 20px;
        z-index:300;
    }
    .body_cart_header_operation{
        position: relative;
        left: 870px;
        top: -186px;
        font-size: 20px;
        z-index:300;
    }
    .body_cart{
        position: relative;
        left:110.5px;
        top: 20px;
        background-color: aqua;
        width: 80%;
        height: 250px;
    }

    .body_cart_fruit{
        width:100%;
        height:240px;
        background-color: green;
        position: relative;
        top: 15px;
    }

    .body_cart_fruit_pic{
        position: relative;
        left:18px;
    }

    .body_cart_fruit_name{
        position: relative;
        left: 320px;
        top: -160px;
        font-size: 25px;
    }

    .body_cart_fruit_price{
        position: relative;
        left: 460px;
        top: -214px;
        font-size: 25px;
    }

    .body_cart_fruit_buyAmount{
        position: relative;
        left: 600px;
        top: -333px;
        font-size: 25px;
    }
    .body_cart_fruit_increaseAmount{
        position: relative;
        left: 624px;
        top: -278px;
        font-size: 25px;
        z-index:100;
    }
    .body_cart_fruit_decreaseAmount{
        position: relative;
        left: 570px;
        top: -395px;
        font-size: 25px;
    }
    .body_cart_fruit_delet{
        position: relative;
        left: 768px;
        top: -429px;
        font-size: 25px;
    }
    .body_cart_buyButton{
        position: relative;
        left:850px;
        top: 40px;
        width:100px;
        height:40px;
        font-size: 20px;
    }

    .body_cart_back {
        position: relative;
        left:353px;
        top: 80px;
        width:100px;
        height:40px;
        font-size: 20px;
    }

    </style>


    <div class="header">
        <div class="wrap">
            <ul class="header-left" style="
    position: absolute;
    font-size: 25px;
    left: 6px;
    top: -10px;
">
                <li><a href="[store_seller].php">Home</a><span>|</span></li>
            </ul>
            <ul class="header-right">
                <li><a href="store_vistor.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="nav">
        <div class="wrap">
            <div class="logo">
                <a href="store_vistor.php">
                    <img src="pic/logo.png" alt="">
                </a>
            </div>
            <div><p style="
                position: absolute;
                left: 158px;
                top: -11px;
                font-family: Microsoft YaHei,SimHei;
                font-size: 27px;
            ">14 Store</p></div>

            <div class="nav-bar">
                <ul>
                    <li>
                        <a href="Login.php" style="
                        position: absolute;
                        left: 40px;
                        ">Buy Fruit</a>    
                    </li>
                </ul>
                <s style="
                    border-left: 1px solid #dddddd;
                    height: 17px;
                    left: 480px;
                    overflow: hidden;
                    position: absolute;
                    top: 22px;
                    width: 0;
                "></s>
                <ul>
                    <li>
                        <a href="[store_seller].php" style="
                        position: absolute;
                        left: 184px;
                        top: 0px;
                        ">Sell Fruits</a>    
                    </li>
                </ul>
                <s></s>
            </div>
            <div class="cart"><span class="cart_price">Cart<img src="pic/icon.png" style="width: 24px; height: 24px; position: relative; left: 25px; top:3px;"></span>
            </div>
        </div>
    </div>

    <div class="body_main">
    <div class="body_cart_header">
        <p class="body_cart_header_pic">Picture</p>
        <p class="body_cart_header_name">Name</p>
        <p class="body_cart_header_price">unit price</p>
        <p class="body_cart_header_amount">Amount</p>
        <p class="body_cart_header_operation">Operation</p>
    </div>
    <div class="body_cart">
        

        <?php
            $sql="SELECT * FROM cart_seller WHERE username='$usingname'";

            //execute the SQL query		
            $result=mysqli_query($conn,$sql);

            // list data where search result is not 0
            if(mysqli_num_rows($result)>0){//output

        
				$fields = mysqli_num_fields($result);

                while ($row=mysqli_fetch_array($result)){
                    echo "
                        <div class=\"body_cart_fruit\">
                            <div class=\"body_cart_fruit_pic\">
                                <img src=\"pic/".$row["picture"]."\" width=\"220px\" height=\"220px\">
                            </div>
                            <div class=\"body_cart_fruit_name\">
                                <p>".$row["name"]."</p>
                            </div>
                            <div class=\"body_cart_fruit_price\">
                                <p>".$row["price"]."</p>
                            </div>
                            
                            <form action=\"[add_cart].php\" method=\"POST\">
                                <input type=\"submit\" class=\"body_cart_fruit_increaseAmount\" name=\"submit".$row["name"]."\" value=\"+\">
                            </form>

                            <div class=\"body_cart_fruit_buyAmount\">
                                <p>".$row["amount"]."</p>
                            </div>
                            
                            <form action=\"[minus_cart].php\" method=\"POST\">
                                <input type=\"submit\" class=\"body_cart_fruit_decreaseAmount\" name=\"submit".$row["name"]."\" value=\"-\">
                            </form>

                            <!--<form action = \"[update_cart].php\" class=\"body_cart_fruit_buyAmount\" method=\"POST\">
                                <input type=\"number\" value=\"".$row["amount"]."\" style=\"width:30px; height:20px;\"  name=\"submitUpdate".$row["name"]."\">
                                <input type=\"submit\" name=\"submitUpdateButton\" value=\"update\"> 
                            </form>-->
                            
                            
                            <form action=\"[delete_cart].php\" method=\"POST\">
                                <input type=\"submit\" class=\"body_cart_fruit_delet\" name=\"submitDelete".$row["name"]."\" id=\"banana\" value=\"Delete\">
                            </form>
                        </div>
                    ";
                }
                echo "
                <a href=\"[receipt_seller].php\"><button class=\"body_cart_buyButton\">Sell</button></a>
        
                <a href=\"[store_seller].php\"><button class=\"body_cart_back\">Back</button></a>";
            }
            else{
                echo "&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Your cart is empty. <a href=\"[store_seller].php\">Go to sell something!</a>";
            }
        ?>      
    </div>
</body>
</html>