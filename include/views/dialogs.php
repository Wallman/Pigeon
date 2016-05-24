<dialog id='loginDialog'>
  <form name='loginForm'>
    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='btn' value='Registrera'>
    <button type='button' class='hideBtn'>Avbryt</button>
  </form>
</dialog>

<dialog id='registerDialog'>
  <form name='registerPrivate' method='POST' action='register.php'>
    <div>
      <label for='private'>Privatperson</label>
      <input type='radio' name='company' id='private' value='0' checked>
      <label for='company'>Företag</label>
      <input type='radio' name='company' id='company' value='1'>
    </div>

    <label for='firstName'>Förnamn</label>
    <input type='text' name='firstName' placeholder='Förnamn'>

    <label for='name'>Efternamn</label>
    <input type='text' name='lastName' placeholder='Efternamn'>

    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='btn' value='Registrera'>
    <button type='button' class='hideBtn'>Avbryt</button>
  </form>

  <form name='registerCompany' method='POST' action='register.php' hidden>
    <div>
      <label for='private'>Privatperson</label>
      <input type='radio' name='company' id='private' value='0'>
      <label for='company'>Företag</label>
      <input type='radio' name='company' id='company' value='1' checked>
    </div>

    <label for='firstName'>Förnamn</label>
    <input type='text' name='firstName' placeholder='Förnamn'>

    <label for='name'>Efternamn</label>
    <input type='text' name='lastName' placeholder='Efternamn'>

    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='btn' value='Registrera'>
    <button type='button' class='hideBtn'>Avbryt</button>
  </form>
</dialog>
