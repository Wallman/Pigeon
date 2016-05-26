$(document).ready(function(){

});

// Button handlers
$('#loginBtn').click(function(){
  $('#loginDialog')[0].showModal();
});

$('#registerBtn').click(function(){
  $('#registerDialog')[0].showModal();
});

$('#logoutBtn').click(function(){
  $.get('logout.php', function(){
    location.reload();
  });
});
// Göm dialog
$('.hideBtn').click(function(e){
  var btn = e.target;
  btn.parentElement.parentElement.close();
});

// Funktion för att visa time-select
$('input[name="now"]').click(function(){
  if($(this).attr('value') == 0){
    $('#timeContainer').show();
  }
  else{
    $('#timeContainer').hide();
  }
});

// Funktion för privat/företag vid registrering
$('input[name="company"]').click(function(){
  if($(this).attr('value') == 1){
    $('#companyName').show();
    $('#firstName').hide();
    $('#lastName').hide();
  }
  else{
    $('#companyName').hide();
    $('#firstName').show();
    $('#lastName').show();
  }
});
