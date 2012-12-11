<?php
	if(!isset($_SESSION)){
		session_start();
	}
	require_once ('../models/categoria.php');
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		/*Verificar si el metodo es llamado desde una forma*/		
		if(isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["tipo"])){
			$categoria = new Categoria();
			$categoria->nombre=$_POST["nombre"];
			$categoria->descripcion=$_POST["descripcion"];
			$categoria->tipo = $_POST["tipo"];
			/*Guardamos la instancia en la base de datos*/
			$resultado = $categoria->guarda();
			if($resultado == 1){
				/*Redirigir a la lista de los usuarios*/
				header("location: ../controllers/listaCategorias.php");
			}else{
				/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR AL USUARIO EN LA BASE DE DATOS*/
			}
		}else{
			/*Si no es llamado desde una forma, redirigir a la forma para que la llenen y poder registrar el usuario*/
			include_once("../views/registraCategoria.php");
		}
	}else{
		/*No es administrador, por lo tanto no tiene los permisos para estar aqui*/
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>
