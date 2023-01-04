<?php
if(!isset($_POST['name']) or !isset($_POST['pass']) ){
   echo " <H1> You Need to Submit the Form!! <H1>";
   exit;
}   
   $name = $_POST['name'];
   $pass = $_POST['pass'];
  if (($name=="sa" && $pass=="sa")||($name=="name1" && $pass=="name1")||($name=="name2" && $pass=="name2")) {
    header("Location: homepage.html");
        
    
} else {
    header("Location: wrong-loging.php");
  }
?>