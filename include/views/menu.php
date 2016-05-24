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
<<<<<<< HEAD
              <button id='login' type='button' onclick='logIn()'>Logga in</button>
              <button id='register' type='button' onclick='reg()'>Registrera</button>
=======
              <button id='loginBtn' type='button'>Logga in</button>
              <button id='registerBtn' type='button'>Registrera</button>
>>>>>>> master
            </div>";
    }
   ?>
</div>
