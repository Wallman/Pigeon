<?php
  if(isset($_POST))
  {
    require ("include/bootstrap.php");
    $db = new Database();
    $v = new Validator();

    if(!$v->ValidateLogin($_POST['email'], $_POST['password'])){
      die('fyll i alla fält');
    }

    if(!$user = $db->GetUser($_POST['email'])){
      die('Användare finns inte');
    }

    if(hash('sha256', $user->salt . $_POST['password']) == $user->password)
    {
      session_start();
      $_SESSION['email'] = $user->email;
      $_SESSION['name'] = $user->name;
      $_SESSION['company'] = $user->company;
    }
    else {
      die ("false");
    }

    header("Location: index.php");
    // AJAX header("Location: include/views/add_comment.php");
  }

 ?>
