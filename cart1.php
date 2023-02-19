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

<?php
  // create short variable names
  $pro1=0;
  $pro2=0;
  $pro3=0;
  $pro4=0;
  $pro5=0;
  $pro6=0;
  if(!empty($_POST['pro1']))
  {  $pro1 = $_POST['pro1'];
    try{
        if(!is_numeric($_POST['pro1']))
        throw new Exception();
    }catch(Exception $e)
    { 
        echo "WRONG ENTER";
        header("Location: prices.php");
        return;
    }
}
    if(!empty($_POST['pro2']))
    {  $pro2 = $_POST['pro2'];
        try{
            if(!is_numeric($_POST['pro2']))
            throw new Exception();
        }catch(Exception $e)
        { 
            echo "WRONG ENTER";
            header("Location: prices.php");
            return;
        }
    }

    if(!empty($_POST['pro3']))
    {  $pro3 = $_POST['pro3'];
        try{
            if(!is_numeric($_POST['pro3']))
            throw new Exception();
        }catch(Exception $e)
        { 
            echo "WRONG ENTER";
            header("Location: prices.php");
            return;
        }
    }
    if(!empty($_POST['pro4']))
    {  $pro4 = $_POST['pro4'];
        try{
            if(!is_numeric($_POST['pro4']))
            throw new Exception();
        }catch(Exception $e)
        { 
            echo "WRONG ENTER";
            header("Location: prices.php");
            return;
        }
    }
 
    if(!empty($_POST['pro5']))
    {  $pro5 = $_POST['pro5'];
        try{
            if(!is_numeric($_POST['pro5']))
            throw new Exception();
        }catch(Exception $e)
        { 
            echo "WRONG ENTER";
            header("Location: prices.php");
            return;
        }
    }

    if(!empty($_POST['pro6']))
    {  $pro6 = $_POST['pro6'];
        try{
            if(!is_numeric($_POST['pro6']))
            throw new Exception();
        }catch(Exception $e)
        { 
            echo "WRONG ENTER";
            header("Location: prices.php");
            return;
        }
    }

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
            <div class="line">  </div>
            
           <div>
           <?php
            $sql = "SELECT *
            FROM shoppingcart
             JOIN item ON item.itemcode=shoppingcart.itemcode AND shoppingcart.usercode=$_SESSION[code]; ";
            $result = $conn->query($sql);

if ($result->num_rows > 0)
 {
 // output data of each row
 $i=1;
  while($row = $result->fetch_assoc()) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;Item :".$i."<br>";
   // echo " Name:" .$row["itemname"]. "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Flavor:" . $row["itemflavor"]. "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Quantity:" . $row["itemquant"]."<br>";
    echo "<br>"; 
    $i++; }
} else {
    if($pro1==0 and $pro2==0 and $pro3==0 and $pro4==0 and $pro5==0 and $pro6==0)
  echo "&nbsp;&nbsp;&nbsp;&nbsp;Your cart is empty.";
}
            ?>
           <?php
            if($pro1!=0)
            {
               try{
                 $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
                 $mysqli->begin_transaction();   
                 $r="SELECT * FROM item WHERE itemcode='1' ";
                 $result = $conn->query($r);
                 $row = $result->fetch_assoc();
                 if($row["itemquantt"]>$pro1)
                 {
                    $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
                    VALUES ('$_SESSION[code]','1','$pro1')";
                    if (mysqli_query($conn, $sql)) {
                    echo $pro1."&nbsp;&nbsp;&nbsp;&nbsp;Coffe ice cream";
                    }
                    $mysqli->commit();
                 }else{
                    throw new mysqli_sql_exception();
                 }
                 }catch(mysqli_sql_exception $exception)
                 {
                    echo "hi";
                    $mysqli->rollback();
                    header("Location: prices.php");
                    return;
                 }
           }
            if($pro2!=0)
            {
                try{
                    $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
                    $mysqli->begin_transaction();   
                    $r="SELECT * FROM item WHERE itemcode='1' ";
                    $result = $conn->query($r);
                    $row = $result->fetch_assoc();
                    if($row["itemquantt"]>$pro1)
                    {
                        $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
                        VALUES ('$_SESSION[code]','1','$pro2')";
                        if (mysqli_query($conn, $sql)) {
                          echo $pro1."&nbsp;&nbsp;&nbsp;&nbsp;Coffe ice cream";
                          } 
                       $mysqli->commit();
                    }else{
                       throw new mysqli_sql_exception();
                    }
                    }catch(mysqli_sql_exception $exception)
                    {
                       echo "hi";
                       $mysqli->rollback();
                       header("Location: prices.php");
                       return;
                    }
                
            }
            if($pro3!=0)
            {
                try{
                    $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
                    $mysqli->begin_transaction();   
                    $r="SELECT * FROM item WHERE itemcode='1' ";
                    $result = $conn->query($r);
                    $row = $result->fetch_assoc();
                    if($row["itemquantt"]>$pro1)
                    {
                        $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
                        VALUES ('$_SESSION[code]','1','$pro3')";
                        if (mysqli_query($conn, $sql)) {
                          echo $pro1."&nbsp;&nbsp;&nbsp;&nbsp;Coffe ice cream";
                          }
                       $mysqli->commit();
                    }else{
                       throw new mysqli_sql_exception();
                    }
                    }catch(mysqli_sql_exception $exception)
                    {
                       echo "hi";
                       $mysqli->rollback();
                       header("Location: prices.php");
                       return;
                    }
               
            }
            if($pro4!=0)
            {
                try{
                    $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
                    $mysqli->begin_transaction();   
                    $r="SELECT * FROM item WHERE itemcode='1' ";
                    $result = $conn->query($r);
                    $row = $result->fetch_assoc();
                    if($row["itemquantt"]>$pro1)
                    {
                        $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
                        VALUES ('$_SESSION[code]','1','$pro4')";
                        if (mysqli_query($conn, $sql)) {
                          echo $pro1."&nbsp;&nbsp;&nbsp;&nbsp;Coffe ice cream";
                          }
                       $mysqli->commit();
                    }else{
                       throw new mysqli_sql_exception();
                    }
                    }catch(mysqli_sql_exception $exception)
                    {
                       echo "hi";
                       $mysqli->rollback();
                       header("Location: prices.php");
                       return;
                    }
               
            }
            if($pro5!=0)
            {
                try{
                    $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
                    $mysqli->begin_transaction();   
                    $r="SELECT * FROM item WHERE itemcode='1' ";
                    $result = $conn->query($r);
                    $row = $result->fetch_assoc();
                    if($row["itemquantt"]>$pro1)
                    {
                        $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
                        VALUES ('$_SESSION[code]','1','$pro5')";
                        if (mysqli_query($conn, $sql)) {
                          echo $pro1."&nbsp;&nbsp;&nbsp;&nbsp;Coffe ice cream";
                          }
                       $mysqli->commit();
                    }else{
                       throw new mysqli_sql_exception();
                    }
                    }catch(mysqli_sql_exception $exception)
                    {
                       echo "hi";
                       $mysqli->rollback();
                       header("Location: prices.php");
                       return;
                    }
                
            }
            if($pro6!=0)
            {
                try{
                    $mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
                    $mysqli->begin_transaction();   
                    $r="SELECT * FROM item WHERE itemcode='1' ";
                    $result = $conn->query($r);
                    $row = $result->fetch_assoc();
                    if($row["itemquantt"]>$pro1)
                    {
                        $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
          VALUES ('$_SESSION[code]','1','$pro6')";
          if (mysqli_query($conn, $sql)) {
            echo $pro1."&nbsp;&nbsp;&nbsp;&nbsp;Coffe ice cream";
            }
                       $mysqli->commit();
                    }else{
                       throw new mysqli_sql_exception();
                    }
                    }catch(mysqli_sql_exception $exception)
                    {
                       echo "hi";
                       $mysqli->rollback();
                       header("Location: prices.php");
                       return;
                    }
               
            }
            ?> 
           </div>  
              
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