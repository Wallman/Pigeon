<div class='profile'>
  <?php
    $db = new Database();
    $v = new Validator();

    $user = $db->GetUser($_SESSION['email']);
    $imgUrl = 'assets/img/default_portrait.png';
    if($user->imgUrl){
      $imgUrl = $user->imgUrl;
    }
   ?>
  <img src='<?php echo $imgUrl ?>' alt='Profile picture'>

  <form class='upload_picture' name='fileForm' action='uploadFile.php' method='POST' enctype='multipart/form-data'>
    <input type="file" name="image">
    <input type="submit" class='btn' name="submit" value="Ladda upp bild">
  </form>

  <form name='profileForm' action='editProfile.php' method='POST' onclick='return validateForm(this)'>
     <?php
     if(get_class($user) == 'Company'){
       echo " <label for='name'>Företagsnamn</label>
              <input type='text' name='companyName' value='$user->companyName' >";
     }
     else{
       echo "<label for='name'>Förnamn</label>
             <input type='text' name='firstName' value='$user->firstName' >

             <label for='name'>Efternamn</label>
             <input type='text' name='lastName' value='$user->lastName' >";
     }
      ?>

     <label for='email'>Email</label>
     <input type='text' name='email' value='<?php echo $user->email ?>' >

     <label for='adress'>Adress</label>
     <input type='text' name='adress' value='<?php echo $user->adress ?>' >

     <label for='zipCode'>Postnummer</label>
     <input type='text' name='zipCode' value='<?php echo $user->zipCode ?>' >

     <label for='city'>Stad</label>
     <input type='text' name='city' value='<?php echo $user->city ?>' >

     <input type='submit' name='submitEdit' class='btn' value='Uppdatera information'>
  </form>

  <?php
    $db = new Database();
    $user = $db->GetUser($_SESSION["email"]);

    $_SESSION['company']; // Privat: 0 , Företag: 1
    // if($_SESSION['company'] == 0){
    //   echo "<div class='container'>
    //           <label>Förnamn: </label>$user->firstName
    //           <label>Efternamn: </label>$user->lastName
    //           <label>E-mail: </label>$user->email
    //         </div>";
    // }
    // else{
    //   echo "<div class='container'>
    //           <label for='name'>Företagsnamn: </label>$user->companyName
    //           <label for='name'>E-mail: </label>$user->email
    //         </div>";
    // }
  ?>
</div>
