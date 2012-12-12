<?php
	if(!isset($_SESSION)){
		session_start();
	}
	require_once ('../models/noticia.php');
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		/*Verificar si el metodo es llamado desde una forma*/		
		if(isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["fechaFin1"]) && isset($_GET['id'])){
			$noticia = new Noticia();
			$noticia->id = $_GET['id'];
			$noticia->nombre=$_POST["nombre"];
			$noticia->descripcion=$_POST["descripcion"];
			$noticia->creador = $_SESSION['user_id'];
			$noticia->fecha_creacion = date("Y-m-d H:i:s");
			$noticia->fecha_expiracion = $_POST["fechaFin1"] . '00:00:00';
			/*Guardamos la instancia en la base de datos*/
			$resultado = $noticia->actualiza();
			if($resultado == 1){
				/*Redirigir a la lista de los usuarios*/
				header("location: ../controllers/listaNoticias.php");
			}else{
				/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR AL USUARIO EN LA BASE DE DATOS*/
			}
		}else{
			/*Si no es llamado desde una forma, redirigir a la forma con los campos de la noticia
			para que la actualicen y poder registrar los cambios*/
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				$id = $_GET['id'];
				$noticia = new Noticia();
				$noticia->busca($id);
				include_once("../views/editaNoticia.php");
			}else{
			/*No es administrador, por lo tanto no tiene los permisos para estar aqui*/
			http_response_code(403);
			$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"Hubo+problemas+al+cargar+la+noticia.+Informe+sobre+este+problema."%3B%7D';
			include_once('../controllers/error.php');
			}	
		}
	}else{
		/*No es administrador, por lo tanto no tiene los permisos para estar aqui*/
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>
