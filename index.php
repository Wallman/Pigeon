<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Pigeon</title>
    <link rel='stylesheet' type='text/css' href='assets/main.css'>
    <link rel='stylesheet' type='text/css' href='assets/index.css'>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  </head>
  <body>
    <div class='menu'>
      <!-- <div>
        <a href='index_priv_logged_out.php'>Privatperson</a>
        <a href='index_corp_logged_out.php'>Företag</a>
      </div> -->
      <div>
        <button id='login' class='btn btn-default' type='button'>Logga in</button>
        <button id='register' class='btn btn-default' type='button'>Registrera</button>
      </div>
    </div>
    <div class='search'>
      <div class='container'>
        <div class='row'>
          <div class='logo-container'>
            <img src='assets/img/logo.png' alt='logo'></img>
            <h1 class='logo-text'>Pigeon</h1>
          </div>
        </div>

        <div class='row'>
          <form name='searchForm' method='POST' action='search_transport.php'>
            <h4>Sök transport</h4>
            <input type='text' name='from' placeholder='Från' class='text'>
            <input type='text' name='to' placeholder='Till' class='text'>

            <input class='btn btn-success' type='submit' name='submit' value='Sök'>
          </form>
        </div>
      </div>
    </div>

    <div class='about'>
      <div class='container'>
        <h1>Hur fungerar det?</h1>
        <div class='row what-box'>
          <div class='col-sm-3'>
            <img src="http://placehold.it/150x150" alt='steg1'>
            <h3>Rubrik</h3>
            <p>Text</p>
          </div>
          <div class='col-sm-3'>
            <img src="http://placehold.it/150x150" alt='steg2'>
            <h3>Rubrik</h3>
            <p>Text</p>
          </div>
          <div class='col-sm-3'>
            <img src="http://placehold.it/150x150" alt='steg3'>
            <h3>Rubrik</h3>
            <p>Text</p>
          </div>
          <div class='col-sm-3'>
            <img src="http://placehold.it/150x150" alt='steg4'>
            <h3>Rubrik</h3>
            <p>Text</p>
          </div>

        </div>
      </div>
    </div>

    <dialog id='loginDialog'>
      <form name='loginForm'>
      </form>
    </dialog>

    <dialog id='registerDialog'>
      <form name='registerForm'>
      </form>
    </dialog>

    <script src='assets/main.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

  </body>
</html>
