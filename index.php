<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pigeon</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class='menu'>
      <div>
        <a href='index_priv_logged_out.php'>Privatperson</a>
        <a href='index_corp_logged_out.php'>Företag</a>
      </div>
      <div>
        <button id='login' type='button'>Logga in</button>
        <button id='register' type='button'>Registrera</button>
      </div>
    </div>
    <div class='main-container'>
      <div class='logo-container'>
        <img src='assets/img/logo.png' alt='logo'></img>
        <h1 class='logo'>Pigeon</h1>
      </div>
      <form name='searchForm' method='POST' action='search_transport.php'>
        <h3>Sök transport</h3>
        <label for='from'>Från</label>
        <input type='text' name='from' placeholder='Från' class='text'>

        <label for='to'>Till</label>
        <input type='text' name='to' placeholder='Till' class='text'>

        <input class='button' type='submit' name='submit' value='Sök'>
      </form>
    </div>

    <dialog id='loginDialog'>
      <form name='loginForm'>
      </form>
    </dialog>

    <dialog id='registerDialog'>
      <form name='registerForm'>
      </form>
    </dialog>

    <script src="assets/main.js"></script>
  </body>
</html>
