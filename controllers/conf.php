<?php 
$server="localhost"; 
$username="admin2"; 
$password="delicias"; 
$dataBase="delicias";

$link=mysql_connect($server, $username, $password) 
      or die("Problemas en la conexi�n: ".mysql_error());

$db=mysql_select_db($dataBase, $link) 
        or die("Problemas al seleccionar la base de datos: ".mysql_error()); 
?>