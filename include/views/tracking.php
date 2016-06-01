<div class='tracking'>
  <h1>Aktiva transporter</h1>

  <?php
    if($_SESSION['company'] == 0){
      echo "<div id='animation-container'>
              <img id='dot' src='assets/img/dot.png'></img>
            </div>";
    }
   ?>


  <div class='container'>
    <table>
      <thead>
        <tr>
          <th>Från</th>
          <th>Till</th>
          <th>Sändare</th>
          <th>Mottagare</th>
          <th>Tid</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          if($_SESSION['company'] == 0){
            echo "<tr>
                    <td>Hem</td>
                    <td>Kompis</td>
                    <td>Markus</td>
                    <td>Hanna</td>
                    <td>Nu</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>
                  <tr>
                    <td>Bonn Sushi</td>
                    <td>Hem</td>
                    <td>Bonn Sushi</td>
                    <td>Hanna</td>
                    <td>Nu</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>";
          }
          else{
            echo "<tr>
                    <td>Bas</td>
                    <td>Kund 1</td>
                    <td>Företag</td>
                    <td>Kund 1</td>
                    <td>29/5 18.23</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>
                  <tr>
                    <td>Bas</td>
                    <td>Kund 2</td>
                    <td>Företag</td>
                    <td>Kund 2</td>
                    <td>29/5 18.28</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>
                  <tr>
                    <td>Bas</td>
                    <td>Kund 3</td>
                    <td>Företag</td>
                    <td>Kund 3</td>
                    <td>29/5 18.32</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>
                  <tr>
                    <td>Bas</td>
                    <td>Kund 4</td>
                    <td>Företag</td>
                    <td>Kund 4</td>
                    <td>29/5 18.44</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>
                  <tr>
                    <td>Bas</td>
                    <td>Kund 5</td>
                    <td>Företag</td>
                    <td>Kund 5</td>
                    <td>29/5 18.55</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>

                  <tr>
                    <td>Bas</td>
                    <td>Kund 6</td>
                    <td>Företag</td>
                    <td>Kund 6</td>
                    <td>29/5 18.57</td>
                    <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
                  </tr>
                  <?php ";
          }
         ?>
      </tbody>
    </table>
  </div>
</div>
