<?php
// Start the session
session_start();
if(empty($_SESSION['name']))
{
   // echo "hi again";
    header("Location: login.html");
}
include_once 'tryconnectDB.php';
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
            <span><a href="homepage.php" >home</a></span>
            <span><a href="control.php" id="contact"><?php if($_SESSION['check']==1){echo "Control";} ?></a></span>   
            <span><a href="prices.php" >Prices</a></span>
            <span><a href="contact.html" >Contact </a></span>
            <span><a href="aboutus.html" >us</a></span>
            <span><a href="signin.html" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span><a href="editpage.php" ><?php echo $_SESSION['fname'];?></a></span>
            <span ><a href="cart1.php"><img src="IMG/logocart.png" id="logo1"></a></span>
        </div>
       

        <div id="signboxx">
           
            <form action="addtodatabase.php" method="get">
               Name:<?php echo"&nbsp&nbsp"; ?> <input type="text" name="itemname" size="size" maxlength="length"  placeholder=" Enter item name" class="boxstyle" required='required'><br><br>
                flavor:<?php echo"&nbsp&nbsp"; ?> <input type="text" name="flav" size="size" maxlength="length"  placeholder=" Enter item flavor" class="boxstyle" required='required'><br><br>
                Price:<?php echo"&nbsp&nbsp&nbsp&nbsp"; ?><input type="text" name="price" size="size" maxlength="length"  placeholder=" Enter the price" class="boxstyle" required='required'><br><br>
                Quantity<input type="text" name="quant" size="size" maxlength="length"  placeholder="Enter quatity" class="boxstyle" required='required'><br><br>
                category:<input type="text" name="category" size="size" maxlength="length"  placeholder=" Enter category" class="boxstyle" required='required'><br><br>
                <input type="submit" value="Add Item" id="Signup1">
                <br>
                
            </form>
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