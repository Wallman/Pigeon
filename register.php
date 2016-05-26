<?php
  if(isset($_POST['email'])){
    require ('include/bootstrap.php');
    $db = new Database();
    $v = new Validator();
    $salt = uniqid(false);
    if($_POST['company'] == '0'){
      $user = new User($_POST['email'], $_POST['firstName'], $_POST['lastName'], hash('sha256', $salt.$_POST['password']) , $salt);
    }
    else{
      $user = new Company($_POST['email'], $_POST['companyName'], hash('sha256', $salt.$_POST['password']) , $salt);
    }

    if(!$v->ValidateRegistration($user)){
      die('validate error');
    }

    session_start();

    if(get_class($user) == 'User'){
      if(!$db->RegisterUser($user)){
        die('register error');
      }
      $_SESSION['email'] = $user->email;
      $_SESSION['name'] = $user->firstName . $user->lastName;
      $_SESSION['company'] = 0;
    }

    if(get_class($user) == 'Company'){
      if(!$db->RegisterCompany($user)){
        die('register error');
      }
      $_SESSION['email'] = $user->email;
      $_SESSION['name'] = $user->companyName;
      $_SESSION['company'] = 1;
    }

    header("Location: index.php");
  }
 ?>
