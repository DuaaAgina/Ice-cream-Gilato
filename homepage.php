<?php
// Start the session
session_start();
if(($_SESSION["name"]!='sa'&&$_SESSION["pass"]!='sa')&&($_SESSION["name"]!='user2'&&$_SESSION["pass"]!='user2')&&($_SESSION["name"]!='user1'&&$_SESSION["pass"]!='user1'))
{
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<!-- NAME: DUAA ADEL AGINA
     ID:217010033
     DATE:2022/12/15
     DESCRIPTION: HOME PAGE
    -->
<html lang="en">
    <head>
         <link rel="stylesheet" href="style.css">
         
    </head>
    
    <body class="mainpage">
        <p id="name">
        <?php
             echo $_SESSION['name'];
            ?>
        </p>
        <div class="nav_bar">
 
            <span id="logo"><a href="ourstory.html" id="logoc">Gilato</a></span>
            <span><a href="homepage.php" id="contact">home</a></span>
            <span><a href="prices.html" >Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.html" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span ><a href="cart.php"><img src="IMG/logocart.png" id="logo1"></a></span>
            
        </div>
       

        <div id="box">
            <p class="transbox"><a href="prices.html" > Welcome to our online shop!<br>
            <?php
             echo $_SESSION['name'];
            ?>
                click her to buy online
            </a></p>
           
        </div>
        <footer>
            <div >
                <p>E: Gilato@gmail.com</p>
                <p>P: 000000</p>
                <p><a href="contact.html" >BUSINESS SERVICES</a></p>
                <p><a href="aboutus.html" >ABOUT US</a></p>
                <p><a href="ourstory.html" >OUR STORY</a></p>
                <p><a href="map.html" >WHERE TO FIND US</a></p>
            </div>
        </footer>
    </body>
    
        
    

</html>