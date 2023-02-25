<?php 
session_start();
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
            <span><a href="contact.html" >Contact</a></span>
            <span><a href="aboutus.html" >us</a></span>
            <span><a href="signin.php" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span ><a href="editpage.php" ><?php echo $_SESSION['fname'];?></a></span>
            <span ><a href="cart.php"><img src="IMG/logocart.png" id="logo1"></a></span>
        </div>
       

        <div id="boxedit">
            <p>Editing data</p>
        <form action="updateresult.php" method="get">
         Item name<?php echo "&nbsp&nbsp&nbsp";?>  :<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" size="size" maxlength="length"  placeholder=" Enter your email" class="boxstyle"><br>
         Item flavor<?php echo "&nbsp&nbsp&nbsp";?>:<input type="text" name="flav" value="<?php echo $_SESSION['flavor']; ?>" size="size" maxlength="length"  placeholder=" Enter your First name" class="boxstyle" required='required'><br>
         Item price <?php echo "&nbsp&nbsp&nbsp";?>:<input type="text" name="price" value="<?php echo $_SESSION['price']; ?>" size="size" maxlength="length"  placeholder=" Enter your last name" class="boxstyle" required='required'><br>
         Item quantity:<input type="text"  name="quant" value="<?php echo $_SESSION['quant']; ?>" size="size" maxlength="length"  placeholder="Address" class="boxstyle" required='required'><br>
                
                <input type="submit" value="Submit" id="Signup1">
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