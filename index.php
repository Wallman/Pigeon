<?php
  include ('include/header.php');
  include ('include/views/menu.php');
  // Inloggad
  if(isset($_SESSION['email'])){
    // Privat
    if($_SESSION['company'] == 0){
      // Admin
      if($_SESSION['category'] == 1){
        include ('include/views/addNews.php');
        include ('include/views/profile.php');
        include ('include/views/news.php');
      }
      // Vanlig
      else{
        include ('include/views/tracking.php');
        include ('include/views/searchTransport.php');
        include ('include/views/profile.php');
        include ('include/views/news.php');
      }
    }
    else{ // Företag
      include ('include/views/tracking.php');
      include ('include/views/searchTransport.php');
      include ('include/views/profile.php');
      include ('include/views/news.php');
    }
  }
  else{ // Utloggad
    include ('include/views/searchTransport.php');
    include ('include/views/about.php');
    include ('include/views/dialogs.php');
  }

  include ('include/footer.php');
 ?>
