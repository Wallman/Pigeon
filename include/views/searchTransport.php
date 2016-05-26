<div class='search'>
  <div class='logo-container'>
    <img src='assets/img/logo.png' alt='logo'></img>
    <h1 class='logo-text'>Pigeon</h1>
  </div>

  <div class='container'>
    <form name='searchForm' method='POST' action='search.php'>
      <h2>Sök transport</h2>
      <input type='text' name='from' placeholder='Från' class='text'>
      <input type='text' name='to' placeholder='Till' class='text'>

      <label for='radio-now'>Nu</label>
      <input type='radio' name='now' value='1' checked>
      <label for='radio-later'>Senare</label>
      <input type='radio' name='now' value='0'>

      <div id='timeContainer' hidden>
        <select id='day'>
          <option value='today'>Idag</option>
          <option value='tomorrow'>Imorgon</option>
          <option value='tomorrow'>Annan dag</option>
        </select>
        <select id='hour'>
          <option value='12'>10</option>
          <option value='12'>11</option>
          <option value='12'>12</option>
          <option value='13'>13</option>
          <option value='12'>14</option>
          <option value='12'>15</option>
        </select>
        <select id='minute'>
          <option value='00'>00</option>
          <option value='30'>30</option>
        </select>
      </div>

      <input class='btn' type='submit' name='submit' value='Sök'>
    </form>
  </div>
  <!-- Denna ska till profil -->
  <!-- <form name='fileForm' action='uploadFile.php' method="POST" enctype='multipart/form-data'>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Ladda upp bild">
  </form> -->
</div>
