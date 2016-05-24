<dialog id='loginDialog'>
<<<<<<< HEAD
  <form method="post" action="include/models/validator.php" name='loginForm'>
    E-mail: <input type="email" name="email"/><br><br>
    Lösenord: <input type="password" name="password"/><br><br>
    <input type="submit" name="loginInDialog" value="Logga in"/>
=======
  <form name='loginForm'>
    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='button' value='Registrera'>
    <button type='button' id='hideModal' class='redBtn'>Avbryt</button>
>>>>>>> master
  </form>
</dialog>

<dialog id='registerDialog'>
<<<<<<< HEAD
  <form method="post" action="include/models/validator.php" name='registerForm'>
    E-mail: <input type="email" name="email"/><br><br>
    Lösenord: <input type="password" name="password"/><br><br>
    <input type="submit" name="regInDialog" value="Registrera dig"/>
=======
  <form name='registerForm' method='POST' action='register.php'>

    <label for='name'>Namn</label>
    <input type='text' name='name' placeholder='Namn'>

    <label for='email'>Email</label>
    <input type='text' name='email' placeholder='Email'>

    <label for='password'>Lösenord</label>
    <input type='password' name='password' placeholder='Lösenord'>

    <input type='submit' name='submitRegister' class='button' value='Registrera'>
    <button type='button' id='hideModal' class='redBtn'>Avbryt</button>
>>>>>>> master
  </form>
</dialog>
