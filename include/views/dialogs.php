<dialog id='loginDialog'>
  <form name='loginForm'>
    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='button' value='Registrera'>
    <button type='button' id='hideModal' class='redBtn'>Avbryt</button>
  </form>
</dialog>

<dialog id='registerDialog'>
  <form name='registerForm' method='POST' action='register.php'>

    <label for='name'>Namn</label>
    <input type='text' name='name' placeholder='Namn'>

    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='button' value='Registrera'>
    <button type='button' id='hideModal' class='redBtn'>Avbryt</button>
  </form>
</dialog>
