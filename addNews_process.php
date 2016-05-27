<?php
  if(isset($_POST)){
    require ('include/bootstrap.php');
    session_start();
    $db = new Database();
    $v = new Validator();

    if(!$v->ValidateNews($_POST['title'], $_POST['message'])){
      die('Fyll i alla fält');
    }
    if(!$db->AddNews($_SESSION['id'] ,$_POST['title'], $_POST['message'])){
      die('query error');
    }
    header('Location: index.php');
  }
 ?>
