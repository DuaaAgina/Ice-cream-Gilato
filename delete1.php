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
        <div id="control" >
        <form action="deleteq.php" method="post" enctype="multipart/form-data" >

    <table border="1"   >
      <tr>
        <td>Item number</td>
        <td>Item Name</td>
        <td>Item flavor</td>
        <td>Item price</td>
        <td>Delete Item </td>
        <td>Update Item </td>
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
        $searchterm=$_POST['type'];
      $query = "SELECT * FROM item WHERE itemcategoery Like  '%$searchterm%'";
      //echo $query;
      
      $result = $mysqli->query($query);
      if (!$result) {
        echo "<p>Unable to execute the query.</p> ";
        echo $query;
        die($mysqli->error);
      }
      // fetch data from database
      $i=1;
      
    
      while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
        ?>
        
        <tr>
          <td>
            <?php echo "$i"; $i++;?>
          </td>
          <td>
            <?php echo $data['itemname']; ?>
          </td>
          <td>
            <?php echo $data['itemflavor']; ?>
          </td>
          <td>
            <?php echo $data['itemprice'];
            $y= $data['Itemcode']; ?>
          </td>
         <?php $_SESSION['delet']=$data['Itemcode'];
         $_SESSION['price']=$data['itemprice'];
         $_SESSION['name']=$data['itemname'];
         $_SESSION['flavor']=$data['itemflavor'];
         $_SESSION['quant']=$data['itemquantt'];
          ?>
          <td><a href="deleteq.php?isbn=<?php echo $data['Itemcode'];?>">Delete</a></td>
          </td>
          <td><a href="update.php?isbn=<?php echo $data['Itemcode'];?>">Update</a></td>
        </tr>
        
      <?php
      }
      ?>
    </table>
    <?php
    if ($result->num_rows == 0)
    {
       echo "Empty table, No items to show";
      
    }
    ?>
    <br>
    <!--<p><input type="submit" value="Delete Items" id="Signup1"></p>-->

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