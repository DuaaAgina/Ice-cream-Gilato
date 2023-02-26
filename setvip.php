<?php
session_start();
  //$vip=$_POST['setvip'];
  echo  $_GET['isbn'];
 include 'tryconnectDB.php';
$mysqli = new mysqli('localhost', 'duaa', '13579', 'gilato');
  if ($mysqli->connect_error) {
    echo '<p>Error: Could not connect to database.<br/>
Please try again later.<br/></p>';
    echo $mysqli->error;
    exit;
  }
  mysqli_query($conn,"UPDATE user  SET vipuser='" . '1'."' WHERE usercode='".$_GET['isbn']."'");
 echo "<p>Complete editing </p>";
?>