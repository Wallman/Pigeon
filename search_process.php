<?php
// Detta är en tidig protyp, rapporten beskriver hur detta egentligen ska fungera.
include ('include/header.php');
include ('include/views/menu.php');
if(isset($_SESSION['email'])){
  if(isset($_POST)){
    $v = new Validator();
    $search = new Search($_POST['from'], $_POST['to'], $_POST['now'], $_POST['day'], $_POST['hour'], $_POST['minute']);

    if(!$v->ValidateSearch($search)){
      die("Fyll i alla fält");
    }

    if(isset($_POST['submitSearch'])){
      include ('include/views/confirmTransport.php');
    }
    else{
      $search->sender = $_POST['sender'];
      $search->receiver = $_POST['receiver'];
      include ('include/views/orderPlaced.php');
    }
  }
}
else{
  echo "<h1>Logga in först</h1>";
}
include ('include/footer.php');
?>
