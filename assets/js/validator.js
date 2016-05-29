// Form validation
function validateForm(form){
  var children = form.children;
  console.log("test");
  // Iterera alla fält
  for(var i = 0; i < children.length; i++){
    if(children[i].type == 'text' || children[i].type == 'password'){
      // Validera inte adress, city, zipcode
      if(children[i].name != 'adress' && children[i].name != 'city' && children[i].name != 'zipCode'){
        if(!ValidateField(children[i])){
          return false;
        }
      }
    }
  }
  // Lägg till varning om användaren försöker söka utan att vara inloggad.
  if(form.name == 'searchForm'){
    var loggedIn = !!document.getElementById('logoutBtn');
    if(!loggedIn){
      $('#submitSearch').before('<h3>Logga in eller skapa konto först</h3>');
      return false;
    }
  }
  if(form.name == 'newsForm'){
    alert("Nyhet publicerad!");
  }
}

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
  if(email.trim() == "" || email.indexOf("@") == -1 || email.indexOf(".") == -1){
    return false;
  }
  return true;
};
