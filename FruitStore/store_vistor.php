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
    height: 70px;
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
    /*pic*/
    .pic{
    width: 100%;
    height: 300px;
    background-color: rebeccapurple;
    }
    .picfruit{
        width:100%;
        height:300px;
        position: absolute;
    }
    .body{
        width:100%;
        height:300px;
        background-color: #f5f1ee;
    }
    .line{
        width:100%;
        height:3px;
        background-color:  rgb(34, 170, 86);
    }
    .white{
        width: 100px;
        height: 30px;
        z-index: 100;
        position: absolute;
        background-color: white;
        left: 980px;
        top: 270px;
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
    /*.body_table{
        width:80%;
        position: absolute;
        left:100px;
    }
    .body_table_td{
        background-color: blue;
    }*/
    .body_main_head{
        height: 24px;
        margin-bottom: 20px;
        margin-left: 6px;
    }
    .body_main_head_letter{
        float: left;
        color: #111;
        font-weight: bold;
        font-size: 24px;
        line-height: 24px;
    }
    .body_main_fruit{
        font-size: 20px;
    }
    .body_main_fruit_1{
        width: 220px;
        height: 306px;
        background-color: #f05654;
        position: relative;
        left: 100px;
        display: inline-block;
    }

    .body_main_fruit_2{
        width: 220px;
        height: 306px;
        background-color: #fffb00;
        position: relative;
        display: inline-block;
        left:110px;
    }

    .body_main_fruit_3{
        width: 220px;
        height: 306px;
        background-color: #ee06b4;
        position: relative;
        left:118px;
        display: inline-block;
    }
    .body_main_fruit_4{
        width: 220px;
        height: 306px;
        background-color: #ee7606;
        position: relative;
        left:126px;
        display: inline-block;
    }
    .body_main_fruit_grape{
        width: 220px;
        height: 306px;
        background-color: #5b0eeb;
        position: absolute;
        left: 128px;
        top: 820px
    }
    .body_main_fruit_buybutton{
        position: absolute;
        left: 164px;
        top: 254px;
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
                <li><a href="store_vistor.php">Home</a><span>|</span></li>
            </ul>
            <ul class="header-right">
                <li><a href="Login.php">Login</a><span>|</span><a href="register.php">Register</a></li>
            </ul>
        </div>
    </div>

    <div class="nav">
        <div class="wrap">
            <div class="logo">
                <a href="store.html#">
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
                        <a href="Login.php" style="
                        position: absolute;
                        left: 184px;
                        top: 0px;
                        ">Sell Fruits</a>    
                    </li>
                </ul>
                <s></s>
            </div>
            <div class="cart" onclick="login_warning()"><span class="cart_price">Cart<img src="pic/icon.png" style="width: 24px; height: 24px; position: relative; left: 25px; top:3px;"></span>
            </div>
        </div>
    </div>
<div class="pic">
    
    <div class="picfruit">
        <img src="pic/fruit.gif" style="
    width: 500px;
    height: 300px;
    position: absolute;
    left: 81px;
    ">

    <img src="pic/free_delivery.gif" style="
    width: 500px;
    height: 300px;
    position: absolute;
    left: 580px;
    ">

    <div class="white"></div>
    </div>
</div>
<br>
<div class="line"></div>

<div class="body_main">
    <!--<table border="1" class="body_table">
        <tr>
            <th  colspan="4">Fruit List</th>
        </tr>
        <tr>
            <td class="body_table_td"><img src="Apple.jpg" position="absolute" left:30px; width="50px" height="50px"></td>
            <td>Apple</td>
            <td>Apple</td>
            <td>Apple</td>
        </tr>
    </table>
    -->

    <div class="body_main_head">
        <span class="body_main_head_letter">Fruit List</span>
        <img src="pic/recommend.jpg" width="24px" height="24px">
    </div>
    <div class="body_main_fruit">
        <?php
            include "connection.php";
            $sql="SELECT * FROM fruit";	
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){//output

                $fields = mysqli_num_fields($result);
                $i=1;
                while ($row=mysqli_fetch_array($result)){
                    if($i==5){
                        echo "<br><br>";
                        $i=1;
                    }
                    $have = "0";
                    if($row["Inventory"]<=0){
                        $have = "0";
                        echo"
                            <div class=\"body_main_fruit_".$i."\">
                            <div class=\"body_main_fruit_pic\">
                                <img src=\"pic/".$row["FruitName"].".jpg\" width=\"220px\" height=\"220px\">
                            </div>
                            <div class=\"body_main_fruit_name\">
                                ".$row["FruitName"]."
                                <button class=\"body_main_fruit_buybutton\" onclick=\"login_warning()\">Buy</button>
                            </div>
                            <div class=\"body_main_fruit_price\">
                                Price: ".$row["BuyerPrice"]."/kg
                            </div>
                            <div class=\"body_main_fruit_amount\">
                                Inventory: ".$have.";
                            </div>
                            </div>
                        ";
                    }
                    else{
                        echo "
                            <div class=\"body_main_fruit_".$i."\">
                                <div class=\"body_main_fruit_pic\">
                                    <img src=\"pic/".$row["FruitName"].".jpg\" width=\"220px\" height=\"220px\">
                                </div>
                                <div class=\"body_main_fruit_name\">
                                    ".$row["FruitName"]."
                                    <button class=\"body_main_fruit_buybutton\" onclick=\"login_warning()\">Buy</button>
                                </div>
                                <div class=\"body_main_fruit_price\">
                                    Price: ".$row["BuyerPrice"]."/kg
                                </div>
                                <div class=\"body_main_fruit_amount\">
                                    Inventory: have;
                                </div>
                            </div>
                        ";
                    }
                    $i=$i+1;
                }

            }
            else{
                echo "0 result";
            }
        ?>
    </div>
    
</div>
<script>
    function login_warning(){
        alert("You should login first");
    }
</script>
</body>
</html>