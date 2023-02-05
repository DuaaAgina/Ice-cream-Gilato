<?php
include_once 'tryconnectDB.php';
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

$email = $_GET['email'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
        if ($pass1 == $pass2) {
          $sql = "INSERT INTO user (password,fname,lname,email,address,phone)
          VALUES ('$pass1','$fname','$lname','$email','$address','$phone')";
          if (mysqli_query($conn, $sql)) {
            echo "Welcome to the the family !";
          } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
          mysqli_close($conn);
        }
        else{
          echo "Try again pleas the passwords are not the same";
        }
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
