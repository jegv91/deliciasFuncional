<?php 
$server="localhost"; 
$username="root"; 
$password=""; 
$dataBase="delicias";

$link=mysql_connect($server, $username, $password) 
      or die("Problemas en la conexión: ".mysql_error());

$db=mysql_select_db($dataBase, $link) 
        or die("Problemas al seleccionar la base de datos: ".mysql_error()); 
?>