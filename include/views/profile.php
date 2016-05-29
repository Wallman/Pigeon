<div class='profile'>
  <h1>Min profil</h1>

      <img src="http://communities.naae.org/5.0.2/images/jive-profile-default-portrait.png" alt='profiles'><br>
      <form name='fileForm' action='uploadFile.php' method="POST" enctype='multipart/form-data'>
        <input type="file" name="image">
        <input type="submit" name="submit" value="Ladda upp bild">
      </form>
    <?php
    $db = new Database();
    $user = $db->GetUser($_SESSION["email"]);

    $_SESSION['company']; // Privat: 0 , Företag: 1
    if($_SESSION['company'] == 0){
      echo "<div class='container'>
      <label>Förnamn: </label>$user->firstName<br>
      <label>Efternamn: </label>$user->lastName<br>
      <label>E-mail: </label>$user->email<br>
      </div>";
    }
    else{
      echo "<div class='container'>
      <label for='name'>Företagsnamn: </label>$user->companyName<br>
      <label for='name'>E-mail: </label>$user->email<br>
      </div>";
    }
    ?>
</div>
