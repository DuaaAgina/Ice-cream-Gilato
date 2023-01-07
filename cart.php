<?php
// Start the session
session_start();
if(($_SESSION["name"]!='sa'&&$_SESSION["pass"]!='sa')&&($_SESSION["name"]!='user2'&&$_SESSION["pass"]!='user2')&&($_SESSION["name"]!='user1'&&$_SESSION["pass"]!='user1'))
{
    header("Location: login.html");
}
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
            <span><a href="homepage.html" >home</a></span>
            <span><a href="prices.html" >Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.html" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span ><a href="cart.php"><img src="IMG/logocart.png" id="logo1"></a></span>
            
        </div>
        <div id="cart1">
            <div>
                <p class="Heading">Reservation confirmation</p>
            </div>
            <div class="line">  </div>
            <div>
                <form class="formcar2"  method="post" >
                <?php

    echo '<p>Your order is as follows: </p>';
    $total = 0;
    $total = $pro1 + $pro2 + $pro3;
    echo htmlspecialchars($pro1).' Chocolate Ice cream<br />';
    echo htmlspecialchars($pro2).' Coffe Ice cream<br />';
    echo htmlspecialchars($pro3).' Vanilla Ice cream<br />';
    echo htmlspecialchars($pro4).' Strawberry cones<br />';
    echo htmlspecialchars($pro5).' Cherry tubes<br />';
    echo htmlspecialchars($pro6).' Pistachio tubes<br />';
    $totalamount = 0.00;

    define('p1', 2);
    define('p2', 4);
    define('p3', 6);
    define('p4', 3);
    define('p5', 5);
    define('p6', 7);
                $totalamount = $pro1 * p1
                    + $pro2 * p2
                    + $pro3 * p3
                    + $pro4 * p4
                    + $pro5 * p5
                    + $pro6 * p6;
                    echo "Subtotal: ".number_format($totalamount,2)."LYD"."<br />";
?>
                    <div class="choosing">
                    <p>CHOOSE THE DELIVERY METHOD:</p>
                    Personal receipt<input type="radio" name="tim" value="2" ><br>
                    Delivery Service<input type="radio" name="tim" value="2" >
                    </div>
                    <div class="choosing">
                        <p>CHOOSE THE PAYMENT METHOD:</p>
                        CASH<input type="radio" name="time" value="2" ><br>
                        VESA CARD<input type="radio" name="time" value="2" >
                        </div>
                        <div class="choosing">
                            <p>CHOOSE THE TIME OF DELIVERY:</p>
                            8am-2pm<input type="radio" name="t" value="2" ><br>
                            2pm-8pm<input type="radio" name="t" value="2" >
                            </div>
                </form>
            </div> 
            <a href="order.php"><input type="submit" value="CONFIRM INFORMATION" class="cont"></a>   
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