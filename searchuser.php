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
       

        <div id="control">
       <?php
        $searchtype=$_POST['type'];
        $searchterm=$_POST['search'];
        if (empty($searchtype) || empty($searchterm)) {
            echo '<p>You have not entered any inputs.<br/>
              go back and try again.</p>'; 
         }
         // echo "$searchtype";
          include 'tryconnectDB.php';
          $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
          $query = "SELECT fname, lname, phone, 'address' FROM user WHERE $searchtype Like  '%$searchterm%'  ";
          $result = $mysqli->query($query);
          if ($result->num_rows > 0)
 {
 // output data of each row
 $i=1;
  while($row = $result->fetch_assoc()) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;User :".$i."<br>";
   // echo " Name:" .$row["itemname"]. "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; First name:" . $row["fname"]. "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Last name:" . $row["lname"]."<br>";
    echo "<br>"; 
    $i++; }
} else {
   
  echo "&nbsp;&nbsp;&nbsp;&nbsp;No users found.";
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