<?php
// Start the session
session_start();
if(empty($_SESSION['name']))
{
    header("Location: login.html");
}
include_once 'tryconnectDB.php';
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
            <span><a href="signin.php" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span><a href="editpage.php" ><?php echo $_SESSION['fname'];?></a></span>
            <span ><a href="cart1.php"><img src="IMG/logocart.png" id="logo1"></a></span>
            
        </div>
        

        <div id="cart1">
            <div>
                <p class="Heading">My shopping cart</p>
            </div>
            
            
           <div>
            
          <?php
          if(isset($_POST['quantity']))
          {
          try{
              $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
              $mysqli->begin_transaction();   
              $r="SELECT * FROM item WHERE itemcode='$_POST[dodo]' ";
              $result = $conn->query($r);
              $row = $result->fetch_assoc();
              if($row["itemquantt"]>0)
              {
                 $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
                 VALUES ('$_SESSION[code]','$_POST[dodo]','$_POST[quantity]')";
                 if (mysqli_query($conn, $sql)) {
                 echo "<br>Added Sucessufely to your cart";
                 }
                 $mysqli->commit();
              }else{
                 throw new mysqli_sql_exception();
              }
              }catch(mysqli_sql_exception $exception)
              {
              
                 $mysqli->rollback();
                 header("Location: prices.php");
                 return;
              }
          }
            $sql = "SELECT *
            FROM shoppingcart
             JOIN item ON item.itemcode=shoppingcart.itemcode AND shoppingcart.usercode=$_SESSION[code]; ";
            $result = $conn->query($sql);

if ($result->num_rows > 0)
 {
 // output data of each row
 $i=1;
 
  while($row = $result->fetch_assoc()) {
    ?><form method="post" action="deletep.php"><?php
    echo "&nbsp;&nbsp;&nbsp;&nbsp;Item :".$i."<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Flavor:" . $row["itemflavor"]. "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Quantity:" . $row["itemquant"]."<br>";
    ?>
    <input type="text" name="is"  size="2" value="<?php echo $row['Itemcode'];?>" hidden>
    
    <input type="submit" value="Delete" id="Signup1" >
    <?php
    echo "<br>"; 
    $i++; 
    ?>
    
</form>

<?php
}

} else {
    if(!isset($_POST['quantity']))
  echo "&nbsp;&nbsp;&nbsp;&nbsp;Your cart is emptyooo.";
}
            ?>  
           </div> 
           <br>
           <div class="line">  </div> 
           <br>                                               
<form method="post" action="order.php">
<p>CHOOSE THE PAYMENT METHOD:</p>
                        CASH<input type="radio" name="time" value="1" ><br>
                        VESA CARD<input type="radio" name="time" value="2" >
                        <input type="submit" value="CONFIRM INFORMATION" class="cont">
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