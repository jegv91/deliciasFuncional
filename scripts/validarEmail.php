<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Validar una direcci�n de correo</title>
<script type="text/javascript">
<!--
/*
 * Funci�n para validar una direcci�n de correo
 * Tiene que recibir el identificador del formulario
 */
function validate(form_id,email) {
 
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) {
 
      alert('Invalid Email Address');
      return false;
   }
}
</script>
</head>

<body>
<form id="form_id" method="post" action="action.php" onsubmit="javascript:return validate('form_id','email');">
 
   <input type="text" id="email" name="email" />
 
   <input type="submit" value="Submit" />
</form>
</body>
</html>