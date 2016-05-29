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
      if(get_class($user) == 'User'){
        $_SESSION['name'] = $user->firstName . ' ' . $user->lastName;
        $_SESSION['company'] = 0;
        $_SESSION['category'] = $user->category;
        $_SESSION['id'] = $user->id;
      }
      else{
        $_SESSION['name'] = $user->companyName;
        $_SESSION['company'] = 1;
        $_SESSION['category'] = 0;
      }
    }
    else {
      die ("false");
    }
    header("Location: index.php");
  }

 ?>
