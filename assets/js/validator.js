// // Form validation
// $('form').submit(function(e){
//   e.preventDefault();
//   $form = $(this);
//   var $inputs = $('input', this);
//
//   // Iterera alla fält
//   var allValidated = false;
//   $inputs.each(function(index, value){
//     if(value.type == 'text' || value.type == 'password' ){
//       if(ValidateField(value)){
//         allValidated = true;
//       }
//       else{
//         return false;
//       }
//     }
//   });
//
//   if(allValidated){
//     url = $form.attr('action');
//     var posting = $.post(url, $form.serialize());
//     posting.done(function(returnData){
//       console.log(returnData);
//       if(returnData == "false"){
//         $form[0].reset();
//         return false;
//       }
//       // commentForm
//       if($form.attr('name') == 'commentForm'){
//         // Animering
//         $('table').fadeOut("slow",function(){
//           $('tbody').append('<tr><td>' + $('#email').text() + '</td><td>' + $('#name').text() + '</td><td>' + $form.serializeArray()[0].value + '</td></tr>');
//           $form[0].reset();
//         });
//         $('table').fadeIn("slow");
//
//       }
//       // loginForm
//       if($form.attr('name') == 'loginForm'){
//         // Animering
//         $('#registerMessage').fadeOut("slow");
//         $form.fadeOut("slow", function(){
//           $form.remove();
//           $(returnData).insertAfter('h1').hide().fadeIn('slow');
//           $('.hidden').hide();
//         });
//       }
//       // registerForm
//       if($form.attr('name') == 'registerForm'){
//         $('dialog')[0].close();
//
//         $('#registerMessage').fadeOut("slow");
//         $('form').fadeOut("slow", function(){
//           $('form').remove();
//           $(returnData).insertAfter('h1').hide().fadeIn('slow');
//           console.log("twice");
//           $('.hidden').hide();
//         });
//       }
//     });
//   }
// });
//
// // Funktion för att kontrollera och ev. ändra ett fält
// var ValidateField = function(field)
// {
//   if(field.name == 'email'){
//     if(!ValidateEmail(field.value)){
//       field.value = '';
//       field.placeholder = 'Fyll i korrekt email';
//       field.className += ' formInvalid';
//       return false;
//     }
//     return true;
//   }
//   else{
//     if(!ValidateString(field.value)){
//       field.value = '';
//       field.placeholder = 'Måste fyllas i';
//       field.className += ' formInvalid';
//       return false;
//     }
//     return true;
//   }
// };
//
// // Stödfunktion
// var ValidateString = function(string){
//   if(string.trim() == "" || string == null){
//     return false;
//   }
//   return true;
// };
// // Stödfunktion
// var ValidateEmail = function(email){
//   if(email.trim() == "" || email.indexOf("@") == -1 || email.indexOf(".") <= email.indexOf("@")){
//     return false;
//   }
//   return true;
// };
