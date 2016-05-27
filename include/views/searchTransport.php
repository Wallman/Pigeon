<div class='search'>
  <div class='logo-container'>
    <img src='assets/img/logo.png' alt='logo'></img>
    <h1 class='logo-text'>Pigeon</h1>
  </div>

  <div class='container'>
    <form name='searchForm' method='POST' onsubmit='return validateForm(this)' action='search_process.php'>
      <h2>Sök transport</h2>
      <input type='text' name='from' placeholder='Från'>
      <input type='text' name='to' placeholder='Till'>

      <label for='radio-now'>Nu</label>
      <input type='radio' name='now' value='1' checked>
      <label for='radio-later'>Senare</label>
      <input type='radio' name='now' value='0'>

      <div id='timeContainer' hidden>
        <select name='day'>
          <option value=''>Välj dag</option>
          <option value='today'>Idag</option>
          <option value='tomorrow'>Imorgon</option>
          <option value='tomorrow'>Annan dag</option>
        </select>
        <select name='hour'>
          <option value=''>Välj tid</option>
          <option value='12'>10</option>
          <option value='12'>11</option>
          <option value='12'>12</option>
          <option value='13'>13</option>
          <option value='12'>14</option>
          <option value='12'>15</option>
        </select>
        <select name='minute'>
          <option value=''>Välj tid</option>
          <option value='00'>00</option>
          <option value='30'>30</option>
        </select>
      </div>

      <input class='btn' type='submit' id='submitSearch' name='submitSearch' value='Sök'>
    </form>
  </div>
</div>
