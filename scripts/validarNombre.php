<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Validar Nombre</title>

<script type="text/javascript">

 function validarNombre () {
   
  var p1 = document.getElementById("nombre").value;
  
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
   alert ("El nombre no puede llevar espacios en blanco");
   return false;
  }
   
  if (p1.length == 0) {
   alert("Los campos no pueden estar vacios");
   return false;
  }
   
 }
</script>
</head>



<body>

<h1>Validar Nombre</h1>

<form name="form1" method="POST" onSubmit="return validarNombre()" action="enviar.php">
  
<label for="nombre">Nombre:</label>
<input type="text" id="nombre" size="20"><br />

<input type="submit" value="Enviar"/>
<input type="reset" value="Restablecer"/>

</form>


</body>
</html>