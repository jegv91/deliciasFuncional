<?php 
if(!isset($_SESSION)){
		session_start();
	}
if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
	/*Obtenemos el id de la persona a la que veremos su detalle*/
	if(isset($_GET["id"])){
		$id=$_GET["id"];
		require_once("../models/usuario.php");
		$usuario = new Usuario();	
		$usuario->busca($id);
		include_once("../views/detalleUsuario.php");
	}else{
		/*INFORMAR QUE HACE FALTA EL ID*/
	}
}else{
	http_response_code(403);
	$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
	include_once('../controllers/error.php');
}
?>