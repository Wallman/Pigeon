<div class='addNews'>
  <p>Tryck <a href='/phpMyAdmin/'>här</a> för att redigera databasen</p>
  <form name='newsForm' method='POST' onsubmit='return validateForm(this)' action='addNews_process.php'>
    <h2>Lägg till nyhet</h2>

    <input type='text' name='title' placeholder='Titel'>
    <input type='text' name='message' placeholder='Meddelande'>

    <input class='btn' type='submit' id='submitNews' name='submitNews' value='Sök'>
  </form>


</div>
