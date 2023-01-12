<?php
// Start the session
session_start();
if(($_SESSION["name"]!='sa'||  $_SESSION["pass"]!='sa')&&($_SESSION["name"]!='user2'|| $_SESSION["pass"]!='user2')&&($_SESSION["name"]!='user1'|| $_SESSION["pass"]!='user1'))
{
    header("Location: login.html");
}
echo $_SESSION['name'];
?>
<?php
  // create short variable names
  $pro1=0;
  $pro2=0;
  $pro3=0;
  $pro4=0;
  $pro5=0;
  $pro6=0;
  if(!empty($_POST['pro1']))
    $pro1 = $_POST['pro1'];
 
    if(!empty($_POST['pro2']))
    $pro2 = $_POST['pro2'];

    if(!empty($_POST['pro3']))
    $pro3 = $_POST['pro3'];
    if(!empty($_POST['pro4']))
    $pro4 = $_POST['pro4'];
 
    if(!empty($_POST['pro5']))
    $pro5 = $_POST['pro5'];

    if(!empty($_POST['pro6']))
    $pro6 = $_POST['pro6'];

?>
<!DOCTYPE html>
<!-- NAME: DUAA ADEL AGINA
     ID:217010033
     DATE:2022/12/15
     DESCRIPTION: CART
    -->
<html lang="en">
    <head>
         <link rel="stylesheet" href="style.css">
         
    </head>
    <body class="ourstory">
        <div class="nav_bar">
            <span id="logo"><a href="ourstory.html" id="logoc">Gilato</a></span>
            <span><a href="homepage.php" >home</a></span>
            <span><a href="prices.php" >Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.html" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span ><a href="cart.php"><img src="IMG/logocart.png" id="logo1"></a></span>
            
        </div>
        <div id="cart1">
            <div>
                <p class="Heading">Thanks <?php
             echo $_SESSION['name'];
            ?></p>
            </div>
            <div class="line">  </div>
            <div>
                <form class="formcar2">
  
                   <h3 class="order">Your order will arrive soon <?php
             echo $_SESSION['name'];
            ?> call us if there is any trouble</h3>
                </form>
            </div> 
             
            </div>      
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