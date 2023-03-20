<?php
// Start the session
session_start();
if(empty($_SESSION['name']))
{
    header("Location: login.html");
}
echo $_SESSION['name'];
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
            <span><a href="control.php" ><?php if($_SESSION['check']==1){echo "Control";} ?></a></span>
            <span><a href="prices.php" >Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.php" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span ><a href="cart1.php"><img src="IMG/logocart.png" id="logo1"></a></span>
            
        </div>
        <div id="cart1">
            <?php
            $sql = "SELECT *
            FROM shoppingcart
             JOIN item ON item.itemcode=shoppingcart.itemcode AND shoppingcart.usercode=$_SESSION[code]; ";
            $result = $conn->query($sql);
            if(isset($_POST['time']))//complete information
{if ($result->num_rows > 0)
 {

    $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
     
 $i=1;
 $newprices=0;
  while($row = $result->fetch_assoc()) {
    try{
        $mysqli->begin_transaction(); 
    $newprice=$row["itemquantt"]-$row["itemquant"];
    $sql1 = "UPDATE item SET itemquantt=' $newprice' WHERE itemcode='$row[itemcode]'; ";
            $res = $conn->query($sql1);
    $newprices+=$row["itemquant"]*$row["itemprice"];
   
    $res = $conn->query($sql1);
    $sql1 = "DELETE FROM shoppingcart  WHERE itemcode='$row[itemcode]' and usercode='$_SESSION[code]'; ";
     $res = $conn->query($sql1);
    }catch(mysqli_sql_exception $exception)
    {
        $mysqli->rollback();
    }
    echo "<br>"; 
    $i++; 
  }
  $s=$newprices;
  if($_SESSION['vip']=='1')
  {
    echo "Total price before discount is :". $newprices."LYD";
    echo "<br>You have a discount 10% !<br>";
      $s=90/100*$newprices;
    echo 90/100*$newprices."LYD";
  }
  $sql1 = "INSERT INTO orders (usercode,paycode,totalprices)
  VALUES ('$_SESSION[code]',$_POST[time],' $newprices')";
  echo "total oreder price is : ".$s."LYD";
  echo "<br>Your order will arrive soon ".$_SESSION['fname']."Thanks you";
}else{
    echo "Nothing to order";
}
}else{
    echo "please complete the information you did not choose a payment method";
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