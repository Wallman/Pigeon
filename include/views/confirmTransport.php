<div class='confirmTransport'>

  <form name='searchForm' method='POST' onsubmit='return ValidateForm(this)' action='search_process.php'>
    <label for='from'>Från</label>
    <input type='text' name='from' placeholder='Från' value='<?php echo $search->from; ?>'>

    <label for='to'>Till</label>
    <input type='text' name='to' placeholder='Till' value='<?php echo $search->to; ?>'>

    <label for='sender'>Sändare</label>
    <input type='text' name='sender' placeholder='Sändare'>

    <label for='receiver'>Mottagare</label>
    <input type='text' name='receiver' placeholder='Mottagare'>

    <!-- Nu eller senare -->
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

    <input type='submit' name='submitConfirmation' class='btn' value='Skapa beställning'>
    <a href='index.php' class='hideBtn'>Avbryt</a>
  </form>

</div>
