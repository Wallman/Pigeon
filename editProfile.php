<?php
  if(isset($_POST)){
    require 'include/bootstrap.php';
    $db = new Database();
    $v = new Validator();
    session_start();

    if($_SESSION['company'] == '0'){
      $user = new User($_POST['email'], $_POST['firstName'], $_POST['lastName'],'' , '', 0);
      $user->adress = $_POST['adress'];
      $user->city = $_POST['city'];
      $user->zipCode = $_POST['zipCode'];
    }
    else{
      $user = new Company($_POST['email'], $_POST['companyName'], '' , '');
      $user->adress = $_POST['adress'];
      $user->city = $_POST['city'];
      $user->zipCode = $_POST['zipCode'];
    }

    if(!$v->ValidateEdit($user)){
      die('validate error');
    }

    if(!$db->EditUser($user)){
      die('register error');
    }
    $_SESSION['email'] = $user->email;
    if(get_class($user) == 'User'){
      $_SESSION['name'] = $user->firstName . $user->lastName;
    }
    else{
      $_SESSION['name'] = $user->companyName;
    }
    header("Location: index.php");
  }
 ?>
