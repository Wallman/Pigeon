<div class='menu'>
  <?php
    // echo $_SERVER['PHP_SELF'];
    if(isset($_SESSION['email'])){
      echo "<div>
              <button id='logoutBtn' type='button'>Logga ut</button>
            </div>";
    }
    else{
      echo "<div>
              <button id='loginBtn' type='button' onclick='logIn()'>Logga in</button>
              <button id='registerBtn' type='button' onclick='reg()'>Registrera</button>
            </div>";
    }
   ?>
</div>
