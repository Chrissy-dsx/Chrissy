<html>
    <head>
    <body style="
    min-width: 1190px;
">
        <style>
            /* 头部 */
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
    
    /* 导航 */
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
            #div{position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);}
            #placeholder1{color:rgb(0, 0, 0);border:none;border-bottom: 1px solid #c0bdbd;}
            #placeholder2{color:rgb(0, 0, 0);border:none;border-bottom: 1px solid #c0bdbd;}
            #text{color: black;font-size: 13px;}
            #copyright{text-align:right;font-size:10px;font-family: 'Times New Roman', Times, serif;}
            #submit{width: 170px;height: 28px;background: linear-gradient(to right, #ffd700, #ffe680);; border: none;color: #fff;font-size: 16px;cursor: pointer;}
        </style>
        
    </head>
    <body>
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
                <li><a href="Login.php">Login</a></li>
            </ul>
        </div>
    </div>
        <div id="div">
        <form action="registersql.php" method="POST">
        <h1 style="font-family: 'Times New Roman', Times, serif;text-align:center;">Register</h1><br>
        <input type="text" id="placeholder1" name="placeholder1" placeholder="Username"><br><br>
        <input type="text" id="placeholder2" name="placeholder2" placeholder="Userpassword"><br><br>
        <p id="text">User Type:</p>
        <label for="radio" id="text">
                <input type="radio" name="radio" value="buyer">buyer
                <input type="radio" name="radio" value="seller">seller
                <!-- <input type="radio" name="radio" value="admin">admin -->
        </label><br><br>
        <input type="submit" id="submit" value="Login"><br><br><br>
        </form> 
        </div>
    </body>
</html>