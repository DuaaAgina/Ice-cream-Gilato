<?php
// Start the session
include 'tryconnectDB.php.';
session_start();
if(empty($_SESSION['name']))
{
   
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<!-- NAME: DUAA ADEL AGINA
     ID:217010033
     DATE:2022/12/15
     DESCRIPTION: PRICE PAGE
     SHOWS SOME FLAVOURS OF THE ICE CREAM
    -->
<html lang="en">
    <head>
         <link rel="stylesheet" href="style.css">
    </head>
    <body class="price">
        <div class="nav_bar">
            <span id="logo"><a href="ourstory.html" id="logoc">Gilato</a></span>
            <span><a href="homepage.php" >home</a></span>
            <span><a href="prices.php" id="contact">Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.php" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span><a href="editpage.php" ><?php echo $_SESSION['fname'];?></a></span>
            <span ><a href="cart.php"><img src="IMG/logocart.png" id="logo1"></a></span>
        </div>
        
        <div id="cart">
        <div class="dropdown">
            <button>Category</button>
            <div class="dropdown-content">
            <a href="tubes.php">Tubs</a>
            <a href="cones.php">Cones</a>
            <a href="bars.php">Bars</a>
            </div>
        </div>
        <div>
                <p class="Heading">Welcome 
           
            </p>
            <?php
            $sql = "SELECT * FROM item WHERE `itemcategoery`='1' ";
            $result = $conn->query($sql);

if ($result->num_rows > 0)
 {
 // output data of each row
 $i=1;
  while($row = $result->fetch_assoc()) {
    echo "Item :".$i."<br>";
    echo " Name:" .$row["itemname"]. "<br>";
    echo " Flavor:" . $row["itemflavor"]. "<br>";
    echo " Price:" . $row["itemprice"]."LDY". "<br>";
    echo "<br>"; 
    $i++; }
} else {
  echo "0 results";
}
            ?>
        
        
        </div>
        </div>
        <footer>
            <div id="fo">
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