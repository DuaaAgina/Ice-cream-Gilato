<?php
session_start();
echo $_POST['is'];
include 'tryconnectDB.php';
$mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
      if ($mysqli->connect_error) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.<br/></p>';
        echo $mysqli->error;
        exit;
      }
      $query ="DELETE from shoppingcart where usercode=' $_SESSION[code]' and itemcode='$_POST[is]'";
$delete =  $conn->query($query);
if($delete)
{
$conn->close();// Close connection
header("location:prices.php"); 
exit;
}
else
{
echo "<p>Unable to execute the query.</p> ";
echo $query;
die ($conn ->error);
}    	
?>