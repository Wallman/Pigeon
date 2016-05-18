<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Pigeon</title>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='assets/main.css'>
    <link rel='stylesheet' type='text/css' href='assets/index.css'>
    <link rel='stylesheet' type='text/css' href='assets/animation.css'>
  </head>
  <body>
    <div class='menu'>
      <div>
        <button id='logout' class='btn btn-default' type='button'>Logga ut</button>
      </div>
    </div>

    <div class='tracking'>
      <div class='container'>
        <div id='animation-container'>
          <img id='dot' src='assets/img/dot.png'></img>
        </div>

        <h2>Aktiva transporter</h2>
        <table class='table table-hover'>
          <thead>
            <tr>
              <th>Från</th>
              <th>Till</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Hem</td>
              <td>Kompis</td>
              <td><button type='button' class='btn btn-table'><span class="glyphicon glyphicon-pencil"></span></button></td>
            </tr>
            <tr>
              <td>Bonn Sushi</td>
              <td>Hem</td>
              <td><button type='button' class='btn btn-table'><span class="glyphicon glyphicon-pencil"></span></button></td>
            </tr>
          </tbody>
        </table>
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

    </div>
  </body>
