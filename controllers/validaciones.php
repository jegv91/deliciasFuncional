
<?php
include_once('../models/usuario.php');
include_once('../views/index.php');

function validate(form_id,user) {
 
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form_id].elements[user].value;
   if(reg.test(address) == false) {
 
      alert('Correo Invalido');
      return false;
   }
}


function validarPassw () {
   
  var p1 = document.getElementById("password").value;
  
  var espacios = false;
  var cont = 0;

  // Este bucle recorre la cadena para comprobar
  // que no todo son espacios
        while (!espacios && (cont < p1.length)) {
                if (p1.charAt(cont) == " ")
                        espacios = true;
                cont++;
        }
   
  if (espacios) {
   alert ("Campo Requerido");
   return false;
  }
   
  if (p1.length == 0) {
   alert("Los campos no pueden estar vacios");
   return false;
  }
   
 }


?>