<div class='menu'>
  <?php
    // echo $_SERVER['PHP_SELF'];
    if(isset($_SESSION['email'])){
      echo "<div>
              <button id='logout' type='button'>Logga ut</button>
            </div>";
    }
    else{
      echo "<div>
              <button id='login' type='button'>Logga in</button>
              <button id='register' type='button'>Registrera</button>
            </div>";
    }
   ?>
</div>
