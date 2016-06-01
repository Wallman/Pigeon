<div class='orderPlaced'>
  <div class='logo-container'>
    <img src='assets/img/logo.png' alt='logo'></img>
    <h1 class='logo-text'>Pigeon</h1>
  </div>

  <h3>Din beställning är lagd och väntar på godkännande. Innan drönaren<br/>
     kan starta måste sändare och mottagare bekräfta transporten.</h3>

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
      <tr>
        <td><?php echo $search->from; ?></td>
        <td><?php echo $search->to; ?></td>
        <td><?php echo $search->sender; ?></td>
        <td><?php echo $search->receiver; ?></td>
        <td><?php if($search->now){echo 'Nu';} else{echo $search->day.$search->hour.$search->minute;} ?></td>
        <td>
        <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
      </tr>
    </tbody>
  </table>
  <a href='index.php' class='hideBtn'>Tillbaka</a>
</div>
