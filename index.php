<?php
  include ('include/header.php');
  include ('include/views/menu.php');
  // Inloggad
  if(isset($_SESSION['email'])){
    // Privat
    if($_SESSION['company'] == 0){
      include ('include/views/tracking.php');
      include ('include/views/searchTransport.php');
      include ('include/views/profile.php');
    }
    else{ // Företag
      include ('include/views/tracking.php');
      include ('include/views/searchTransport.php');
      include ('include/views/profile.php');
    }
  }
  else{ // Utloggad
    include ('include/views/searchTransport.php');
    include ('include/views/about.php');
    include ('include/views/dialogs.php');
  }

  include ('include/footer.php');
 ?>
