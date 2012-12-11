<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		require_once '../models/noticia.php';
		//Objeto noticia
		$noticia=new Noticia();
		//Llamar a funcion para obtener el array asociativo con la informacion de cada usuario
		$lista=$noticia->busca_todos();
		include_once ("../views/listaNoticias.php");
	}else{
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>