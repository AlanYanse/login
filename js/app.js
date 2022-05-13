
$(document).on("submit", ".form_registro", function(event){

  event.preventDefault();
  console.log("forma enviado.");

  var $form = $(this);

  var dataForm = {

    email: $("#email").val(),
    password: $("#password").val()

  }
 
  /* 
  if(data_form.email.length < 6){
    $("#msg_error").text("Ingresar un email válido").show();
    return false;
  
  }else if(data_form.password.length < 8){
    
    $("#msg_error").text("El password debe ser de 8 o más caracteres").show();
    return false;

    ...Esta validación no funka...


  */

    var urlPHP = 'http://localhost/tutorial/login/ajax/procesar_registro.php';

  $.ajax({

    type : "POST",
    url : urlPHP,
    data : dataForm,
    dataType : "json",
    async : true


  })
    .done(function(res){
      console.log(res);
    })
    .fail(function(err){
      console.log(err)
    })
    .always(function(){
      console.log("Final de la llamada ajax.");
    })
    
    return false;



});
