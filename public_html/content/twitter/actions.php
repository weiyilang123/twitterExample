<?php
include("functions.php");

if($_GET['action'] == "loginSignup") {

  $error = "";
  if(!$_POST['email']) {
    $error = "Email address is required";
  }
  else if (!$_POST['password']){
    $error = "password is required";
  }
  else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    $error = "Please enter a valid email address";
  }


  if($error != "") {
    echo $error;
    exit();
  }


  if($_POST['loginActive'] == 0) {

    $query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
      $error = "This email address is already taken.";
    }

  }

  
  if($error != "") {
    echo $error;
    exit();
  }


}


 ?>
