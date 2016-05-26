// Form validation
$('form').submit(function(e){
  $form = $(this);
  var $inputs = $('input', this);

  // Iterera alla fält
  var allValidated = false;
  $inputs.each(function(index, value){
    if(value.type == 'text' || value.type == 'password' ){
      if(ValidateField(value)){
        allValidated = true;
      }
      else{
        return false;
      }
    }
  });
  return allValidated;
});

// Funktion för att kontrollera och ev. ändra ett fält
var ValidateField = function(field)
{
  if(field.name == 'email'){
    if(!ValidateEmail(field.value)){
      field.value = '';
      field.placeholder = 'Fyll i korrekt email';
      field.className += ' formInvalid';
      return false;
    }
    return true;
  }
  else{
    if(!ValidateString(field.value)){
      field.value = '';
      field.placeholder = 'Måste fyllas i';
      field.className += ' formInvalid';
      return false;
    }
    return true;
  }
};

// Stödfunktion
var ValidateString = function(string){
  if(string.trim() == "" || string == null){
    return false;
  }
  return true;
};
// Stödfunktion
var ValidateEmail = function(email){
  if(email.trim() == "" || email.indexOf("@") == -1 || email.indexOf(".") <= email.indexOf("@")){
    return false;
  }
  return true;
};
