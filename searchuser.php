<?php
// Start the session
session_start();
if(empty($_SESSION['name']))
{
   // echo "hi again";
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
       

        <div id="control1">
       
        <form action="AddToChart.php" method="post" enctype="multipart/form-data">
<table border="1"   >
  <tr>
    <td>User number</td>
    <td>User first Name</td>
    <td>User last Name</td>
    <td>User phone</td>
    <td>User gmail </td>
    <td>User address </td>
    <td>Delete user </td>
    <td>Set VIP </td>
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
  $searchtype=$_POST['type'];
  $searchterm=$_POST['search'];
  $query = "SELECT * FROM user WHERE $searchtype Like  '%$searchterm%'  ";
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
    
    <?php 
     $_SESSION['vip']=$d['usercode'];
      ?>
    <tr>
      <td>
        <?php echo "$i"; $i++;?>
      </td>
      <td>
        <?php echo $d['fname']; ?>
      </td>
      <td>
        <?php echo $d['lname']; ?>
      </td>
      <td>
        <?php echo $d['phone'];
       ?>
      </td>
      <td>
        <?php echo $d['email'];
       ?>
      </td>
      <td>
        <?php echo $d['address'];
       ?>
      </td>
    
      <td><a href="deleteq.php?isbn=<?php echo $d['usercode'];?>">Delete</a></td>
      <td>
      <a href="setvip.php?isbn=<?php echo $d['usercode']; ?>">set</a>
        <!--<input type="checkbox" value='" name="setvip">-->
      </td>
     
    </tr>
   
  <?php
  }
  ?>
</table>
<br>
<!--<input type="submit" value="Set VIP" id="Signup1">-->

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