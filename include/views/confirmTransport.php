<div class='confirmTransport'>
  <div class='logo-container'>
    <img src='assets/img/logo.png' alt='logo'></img>
    <h1 class='logo-text'>Pigeon</h1>
  </div>
  <h1>Din drönare är på väg!</h1>
  <table>
    <thead>
      <tr>
        <th>Från</th>
        <th>Till</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $search->from; ?></td>
        <td><?php echo $search->to; ?></td>
        <td><button><img src='assets/img/pencil.png' alt='pencil'/></button></td>
      </tr>
    </tbody>
  </table>
</div>
