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
            <span><a href="prices.php" >Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.php" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span ><a href="editpage.php" id="contact"><?php echo $_SESSION['fname'];?></a></span>
            <span ><a href="cart.php"><img src="IMG/logocart.png" id="logo1"></a></span>
        </div>
       

        <div id="boxedit">
            <p>Editing data</p>
        <form action="editresult.php" method="get">
        <input type="text" name="email" value="<?php echo $_SESSION['name']; ?>" size="size" maxlength="length"  placeholder=" Enter your email" class="boxstyle"><br>
                <input type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>" size="size" maxlength="length"  placeholder=" Enter your First name" class="boxstyle" required='required'><br>
                <input type="text" name="lname" value="<?php echo $_SESSION['lname']; ?>" size="size" maxlength="length"  placeholder=" Enter your last name" class="boxstyle" required='required'><br>
                <input type="text"  name="address" value="<?php echo $_SESSION['address']; ?>" size="size" maxlength="length"  placeholder="Address" class="boxstyle" required='required'><br>
                <input type="text" value="<?php echo $_SESSION['phone']; ?>" name="phone" size="size" maxlength="length"  placeholder=" Phone number" class="boxstyle" required='required'><br>
                <input type="password" name="pass1" value="<?php echo $_SESSION['pass']; ?>" size="size" maxlength="length"  placeholder="Password" class="boxstyle" required='required'><br>
                <input type="password" name="pass2" value="<?php echo $_SESSION['pass']; ?>" size="size" maxlength="length"  placeholder="verify your password" class="boxstyle" required='required'><br>
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