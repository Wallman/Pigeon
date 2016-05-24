<?php
  if(isset($_POST['email'])){
    require ('include/bootstrap.php');
    $db = new Database();
    // $v = new Validator();
    $salt = uniqid(false);
    $user = new User($_POST['email'], $_POST['firstName'].$_POST['lastName'], hash('sha256', $salt.$_POST['password']) , $salt, $_POST['company']);

    // if(!$v->ValidateUser($user)){
    //   die('validate error');
    // }
    if(!$db->RegisterUser($user)){
      die('register error');
    }
    $_SESSION['email'] = $user->email;
    $_SESSION['name'] = $user->name;
    $_SESSION['company'] = $user->company;
    header("Location: index.php");
    // header("Location: include/views/add_comment.php");
  }
 ?>
