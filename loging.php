<?php
// Start the session
session_start();
include 'tryconnectDB.php';
      $name = htmlspecialchars($_POST['name']);
      $pass = htmlspecialchars($_POST['pass']);
      if(!isset($name))
      {
        header("Location: wrong-loging.php"); 
    
      }elseif(!isset($pass)){
        header("Location: wrong-loging.php");
     
      }else{
    $sql = "SELECT * FROM user WHERE email='$name'";
    $result = mysqli_query($conn,$sql);
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if ($row['email'] === $name && $row['password'] === $pass) {
        $_SESSION['name'] = $name;
        $_SESSION['pass'] = $pass;
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['code'] = $row['usercode'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['check'] = $row['checkme'];
        $_SESSION['vip'] = $row['vipuser'];
        header("Location: homepage.php");    
    }
    else{
      header("Location: wrong-loging.php");
    
    }
      }

?>