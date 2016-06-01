<dialog id='loginDialog'>
  <form name='loginForm' method='POST' onsubmit='return ValidateForm(this)' action='login.php'>
    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitLogin' class='btn' value='Logga in'>
    <button type='button' class='hideBtn'>Avbryt</button>
  </form>
</dialog>

<dialog id='registerDialog'>
  <form name='registerPrivate' method='POST' onsubmit='return ValidateForm(this)' action='register.php'>
    <div>
      <label for='private'>Privatperson</label>
      <input type='radio' name='company' value='0' checked>
      <label for='company'>Företag</label>
      <input type='radio' name='company' value='1'>
    </div>

    <div id='firstName'>
      <label for='firstName'>Förnamn</label>
      <input type='text' name='firstName' placeholder='Förnamn'>
    </div>

    <div id='lastName'>
      <label for='lastName'>Efternamn</label>
      <input type='text' name='lastName' placeholder='Efternamn'>
    </div>

    <div id='companyName' hidden>
      <label for='companyName'>Företagsnamn</label>
      <input type='text' name='companyName' placeholder='Företagsnamn'>
    </div>

    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='btn' value='Registrera'>
    <button type='button' class='hideBtn'>Avbryt</button>
  </form>

  <form name='registerCompany' method='POST' onsubmit='return ValidateForm(this)' action='register.php' hidden>
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
