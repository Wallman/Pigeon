<?php
include ('include/header.php');
include ('include/views/menu.php');
include ('include/views/dialogs.php');
if(isset($_SESSION['email'])){
  if(isset($_POST)){
    $v = new Validator();
    $search = new Search($_POST['from'], $_POST['to'], $_POST['now'], $_POST['day'], $_POST['hour'], $_POST['minute']);

    if(!$v->ValidateSearch($search)){
      echo "Fyll i alla fält";
    }
    else{
      include ('include/views/confirmTransport.php');
    }
  }
}
else{
  echo "<h1>Logga in först</h1>";
}
include ('include/footer.php');
?>
