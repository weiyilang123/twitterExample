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
    else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $error = "Please enter a valid email address";
    }

    if($error != "") echo $error;

    if($_POST['loginActive'] == 0) {
      echo "Sign user up";
    }
  }




 ?>
