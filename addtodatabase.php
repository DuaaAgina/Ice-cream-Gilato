<?php
include_once 'tryconnectDB.php';
// Start the session
session_start();
 ?>   
<!DOCTYPE html>
 <!--NAME: DUAA ADEL AGINA
     ID:217010033
     DATE:2022/12/15
     DESCRIPTION: SIGNIN PAGE
     I TOOK SOME OF THE CODE FROM LICTURES LIKE THE FORM-->
    
<html lang="en">
    <head>
         <link rel="stylesheet" href="style.css"> 
    </head>
    <body class="sign">
        <div class="nav_bar">
            <span id="logo"><a href="ourstory.html" id="logoc">Gilato</a></span>
            <span><a href="homepage.php" >home</a></span>
            <span><a href="prices.php" >Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.php" id="contact">Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span ><a href="cart.html"><img src="IMG/logocart.png" id="logo1"></a></span>
        </div>
        <div id="signbox1">
        <?php

$name = $_GET['itemname'];
$flav = $_GET['flav'];
$price = $_GET['price'];
$quant = $_GET['quant'];
$categ = $_GET['category'];

       
          $sql = "INSERT INTO item (itemname,itemquantt,itemprice,itemcategoery,itemflavor,admincode)
          VALUES ('$name','$quant','$price','$categ','$flav','$_SESSION[code]')";
          if (mysqli_query($conn, $sql)) {
            echo "Added succesufuly";
          } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
          mysqli_close($conn);
    
?>
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
