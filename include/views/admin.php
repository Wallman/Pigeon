<div class='database'>
  <iframe src='/phpMyAdmin/'>Databas</iframe>
</div>
<div class='addNews'>
  <form name='newsForm' method='POST' onsubmit='return validateForm(this)' action='addNews_process.php'>
    <h2>Lägg till nyhet</h2>

    <input type='text' name='title' placeholder='Titel'>
    <input type='text' name='message' placeholder='Meddelande'>

    <input class='btn' type='submit' id='submitNews' name='submitNews' value='Sök'>
  </form>


</div>
