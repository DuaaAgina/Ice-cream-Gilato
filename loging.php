<?php
// Start the session
session_start();
include 'tryconnectDB.php';
    if(isset($_POST['name']) && isset($_POST['name']))
    {
      function validate($data)
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }
      $name = validate($_POST['name']);
      $pass = validate($_POST['pass']);
      
      if(empty($name))
      {
        header("Location: wrong-loging.php"); 
     //  echo "iam here1";
      }elseif(empty($pass)){
        header("Location: wrong-loging.php");
      // echo "iam here2";
      }else{
    echo "valid input";
    $sql = "SELECT * FROM user WHERE email='$name' ";
    $result = mysqli_query($conn,$sql);
    echo $name ."<br>".$pass."<br>";
    echo "<br>". mysqli_num_rows($result);
    if(mysqli_num_rows($result)===1) 
    {
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if ($row['email'] === $name && $row['password'] === $pass) {
        //echo "iam hereeeee";
        $_SESSION['name'] = $name;
        $_SESSION['pass'] = $pass;
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['code'] = $row['usercode'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['lname'] = $row['lname'];
        header("Location: homepage.php");
      }
      else{
        header("Location: wrong-loging.php");
      }
    }
    else{
      header("Location: wrong-loging.php");
     //echo "iam here 3";
    }
      }
} 
else{
  echo "hi";
      header("Location: wrong-loging.php");

    }
   // 
   //echo "hi2";
    
?>