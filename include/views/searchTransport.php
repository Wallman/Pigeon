<div class='search'>
  <div class='logo-container'>
    <img src='assets/img/logo.png' alt='logo'></img>
    <h1 class='logo-text'>Pigeon</h1>
  </div>

  <form name='searchForm' method='POST' action='search_transport.php'>
    <h2>Sök transport</h2>
    <input type='text' name='from' placeholder='Från' class='text'>
    <input type='text' name='to' placeholder='Till' class='text'>

    <label for='radio-now'>Nu</label>
    <input type='radio' name='instant' value='1' checked>
    <label for='radio-later'>Senare</label>
    <input type='radio' name='instant' value='0'>

    <div id='timeContainer' hidden>
      <select id='day'>
        <option value='today'>Idag</option>
        <option value='tomorrow'>Imorgon</option>
      </select>
      <select id='hour'>
        <option value='12'>12</option>
        <option value='13'>13</option>
      </select>
      <select id='minute'>
        <option value='00'>00</option>
        <option value='30'>30</option>
      </select>
    </div>

    <input class='btn' type='submit' name='submit' value='Sök'>
  </form>
</div>
