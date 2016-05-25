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

$('.hideBtn').click(function(e){
  var btn = e.target;
  btn.parentElement.parentElement.close();
});
