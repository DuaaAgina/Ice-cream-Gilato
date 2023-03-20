
<?php
// Start the session
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
            <span><a href="control.php" ><?php if($_SESSION['check']==1){echo "Control";} ?></a></span>
            <span><a href="prices.php" id="contact">Prices</a></span>
            <span><a href="contact.html" >Contact us</a></span>
            <span><a href="aboutus.html" >About us</a></span>
            <span><a href="signin.php" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span><a href="editpage.php" ><?php echo $_SESSION['fname'];?></a></span>
            <span ><a href="cart1.php"><img src="IMG/logocart.png" id="logo1"></a></span>
        </div>
        
        <div id="cart">
        <div class="dropdown">
        <button>Category</button>
        <div class="dropdown-content">
            <a  href="tubes.php">Tubs</a>
            <a href="cones.php">Cones</a>
            <a href="bars.php">Bars</a>
        </div>
        </div>
            <div class="line">  </div>
            <br>
    <form action="cart1.php" method="post" enctype="multipart/form-data">
<table border="1"   >
  <tr>
  <th> </th>
                  <th>flavour</th> 
                  <th>Price</th>
                  <th>Quantity</th>
  </tr>

  <?php

include 'tryconnectDB.php';
$mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
  if ($mysqli->connect_error) {
    echo '<p>Error: Could not connect to database.<br/>
Please try again later.<br/></p>';
    echo $mysqli->error;
    exit;
  }

  $query = "SELECT * FROM item  ";
  //echo $query;
  
  $result = $mysqli->query($query);
  if (!$result) {
    echo "<p>Unable to execute the query.</p> ";
    echo $query;
    die($mysqli->error);
  }
  // fetch data from database
  $i=1;
  

  while ($d = $result->fetch_array(MYSQLI_ASSOC)) {
    ?>
    <form method="post" action="cart1.php?do=<?php echo $d['Itemcode'];?>">
    <tr>
      <td>
        <?php echo "$i"; $i++;
        $_SESSION['ncode']=$d['Itemcode']; ?>
      </td>
      <td>
        <?php echo $d['itemflavor']; ?>
      </td>
      <td>
        <?php echo $d['itemprice']."LYD";
        ?>
      </td>
      <td>
        <?php echo $d['itemname'];
       ?>
      </td>
      <td>
      <input type="text" name="quantity"  size="5" >
      <input type="text" name="dodo"  size="2" value="<?php echo $d['Itemcode'];?>" hidden>
      <input type="submit" value="ADD" id="Signup1" >
      </td>   
    </tr>
    </form>  
  <?php
  }
  ?>
</table>
<br>


   
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