<?php
	include_once('../models/categoria.php');
	include_once('../models/usuario.php');
	if(!isset($_SESSION)){
		session_start();
	}
	/*Verifica si es la primera vez que se entro al sistema*/
	$usuario = new Usuario();
	$result = $usuario->busca_administrador();
	/*Si no encontro ningun administrador, tiene que redirigirlo a la creacion de un nuevo admin*/
	if ($result === 0){
		/*Redirigimos al administrador a la vista para crear su usuario*/
		header("location: ../controllers/registraAdministrador.php");
	}else{		
		/*Cargar todas las categorias que esten en la base de datos*/
		$categoria = new Categoria();
		$usuario = "";
		
		if(isset($_SESSION['user_type'])){
			if($_SESSION['user_type'] == 3){
				$usuario = $_SESSION['user_id'];
			}
		}
		$lista = $categoria->busca_todos();
		include_once("../views/index.php");
	}
?>
