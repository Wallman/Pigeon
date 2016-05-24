<dialog id='loginDialog'>
  <form method="post" action="include/models/validator.php" name='loginForm'>
    E-mail: <input type="email" name="email"/><br><br>
    Lösenord: <input type="password" name="password"/><br><br>
    <input type="submit" name="loginInDialog" value="Logga in"/>
  </form>
</dialog>

<dialog id='registerDialog'>
  <form method="post" action="include/models/validator.php" name='registerForm'>
    E-mail: <input type="email" name="email"/><br><br>
    Lösenord: <input type="password" name="password"/><br><br>
    <input type="submit" name="regInDialog" value="Registrera dig"/>
  </form>
</dialog>
