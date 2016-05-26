
<h1>Min profil</h1>

    <img src="http://www.netdoktorpro.se/images/img/no_avatar.gif" alt='profile'>

    <?php
    if (isset($_POST['email'])){
      $email = $_POST['email'];
      $
      exit();
    }
     ?>

<?php
  $_SESSION['company']; // Privat: 0 , Företag: 1
  if($_SESSION['company'] == 0){
    echo "
    <form>
       <label for='name'>Namn</label>
       <input type='text' name='name' value='$email' readonly><br>
       <label for='email'>Email</label>
       <input type='text' name='email' value='sven.son@gmail.com' readonly><br>
       <label for='adress'>Adress</label>
       <input type='text' name='adress' value='Stationsvägen 3' readonly><br>
       <label for='zipCode'>Postnummer</label>
       <input type='text' name='zipCode' value='741 43' readonly><br>
       <label for='city'>Stad</label>
       <input type='text' name='city' value=Uppsala readonly><br>
    </form>
    ";
  }
  else{
    echo "
    <form>
    <label for='name'>Namn</label>
    <input type='text' name='name' value='$email' readonly><br>
    <label for='email'>Email</label>
    <input type='text' name='email' value='sven.son@gmail.com' readonly><br>
    <label for='adress'>Adress</label>
    <input type='text' name='adress' value='Stationsvägen 3' readonly><br>
    <label for='zipCode'>Postnummer</label>
    <input type='text' name='zipCode' value='741 43' readonly><br>
    <label for='city'>Stad</label>
    <input type='text' name='city' value=Uppsala readonly><br>
    </form>
    ";
  }

  ?>
