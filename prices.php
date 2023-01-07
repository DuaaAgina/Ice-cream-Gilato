<?php
// Start the session
session_start();
if(($_SESSION["name"]!='sa'&&$_SESSION["pass"]!='sa')&&($_SESSION["name"]!='user2'&&$_SESSION["pass"]!='user2')&&($_SESSION["name"]!='user1'&&$_SESSION["pass"]!='user1'))
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
            <span><a href="signin.html" >Signup</a></span>
            <span><a href="login.html" >Login</a></span>
            <span><a href="logout.php" >Logout</a></span>
            <span ><a href="cart.php"><img src="IMG/logocart.png" id="logo1"></a></span>
        </div>
        <div id="cart">
        <div>
                <p class="Heading">Welcome <?php
             echo $_SESSION['name'];
            ?></p>
        
        <form action="cart.php" method="post" >
            
        <div class="line">  </div>
        <div >
            <table style="width:100%" class="table1">
                <tr>
                  <th> </th>
                  <th>flavour</th> 
                  <th>Price</th>
                  <th>Quantity</th>
                </tr>
                <tr>    
                    <td><img src="IMG/pro1.png" class="picart1"></td>
                    <td>Chocolate</td>
                   <td>2LYD</td>
                   <td><input type="text" name="pro1" size="3" maxlength="3" />
                   </td>
                  </tr>
                  <tr>    
                      <td><img src="IMG/pro2.png" class="picart1"></td>
                      <td>Coffe</td>
                     <td>4LYD</td>
                     <td><input type="text" name="pro2" size="3" maxlength="3" />
                     </td>
                    </tr>
                    <tr>    
                        <td><img src="IMG/cones3.png" class="picart1"></td>
                        <td>Vanilla </td>
                       <td>6LYDL</td>
                       <td><input type="text" name="pro3" size="3" maxlength="3" />
                       </td>
                      </tr>
                      <tr>    
                        <td><img src="IMG/cones4.png" class="picart1"></td>
                        <td>Strawberry</td>
                       <td>3LYD</td>
                       <td><input type="text" name="pro4" size="3" maxlength="3" />
                       </td>
                      </tr>
                      <tr>    
                        <td><img src="IMG/bar2.png" class="picart1"></td>
                        <td>Cherry</td>
                       <td>5LYD</td>
                       <td><input type="text" name="pro5" size="3" maxlength="3" />
                       </td>
                      </tr>
                      <tr>    
                        <td><img src="IMG/bar4.png" class="picart1"></td>
                        <td>Pistachio</td>
                       <td>7LYD</td>
                       <td><input type="text" name="pro6" size="3" maxlength="3" />
                       </td>
                      </tr>
             </table>
             <a href="cart2.html"><input type="submit" value="Show my cart" class="cont"></a>
        </div>
    </form>
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