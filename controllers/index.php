<?php
	include_once('../models/categoria.php');
	include_once('../models/usuario.php');
	include_once('../models/noticia.php');
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['user_type'])){
		if($_SESSION['user_type'] == 0){
			header("location: ../controllers/indexAdmin.php");
		}
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
		/*Obtiene las noticias mas recientes para mostrarlas*/
		$noticia = new Noticia();
		$listaNoticias = $noticia->busca_recientes();
		
		if(isset($_SESSION['user_type'])){
			if($_SESSION['user_type'] == 3){
				$usuario = $_SESSION['user_id'];				
				//Manda a llamar al carrito indicandole los productos que se encuentran disponibles
				require_once("../models/producto.php");
				$producto = new Producto();
				$listaProductos = $producto->busca_todos();
			}
		}
		$lista = $categoria->busca_todos();
		include_once("../views/index.php");
	}
?>
