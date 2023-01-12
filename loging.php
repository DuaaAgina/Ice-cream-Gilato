<?php
// Start the session
session_start();
   $name = $_POST['name'];
   $pass = $_POST['pass'];
    // Set session variables
    $_SESSION['name'] = $name;
    $_SESSION['pass'] = $pass;
    echo "Session variables are set.";
  if (($name=="sa" && $pass=="sa")||($name=="user1" && $pass=="user1")||($name=="user2" && $pass=="user2")) {
    header("Location: homepage.php");    
} else {
    header("Location: wrong-loging.php");
  } 
?>