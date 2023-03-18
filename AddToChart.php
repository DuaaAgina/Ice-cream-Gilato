<?php
session_start();
include_once 'tryconnectDB.php';
echo $_POST['quantity'];
echo "<br>";
echo $_POST['dodo'];
echo "<br>";
try{
    $sq = new mysqli('localhost', 'duaa', '13579', 'gilato');
    $sq->begin_transaction();   
      $sql = "INSERT INTO shoppingcart (usercode,itemcode,itemquant)
      VALUES ('$_SESSION[code]',$_POST[dodo],$_POST[quantity])";
      if (mysqli_query($conn, $sql)) {
        echo "Added succesufuly";
        header("cart1.php");
      } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      
      $sq->commit();
      header("cart1.php");
      mysqli_close($conn);
    }catch(mysqli_sql_exception $exception)
    {
        $mysqli->rollback();
        header("cart1.php");
        return;
    }
    
?>
