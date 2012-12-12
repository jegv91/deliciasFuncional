<?php
	if(!isset($_SESSION)){
		session_start();
	}
	require_once ('../models/producto.php');
	require_once ('../models/categoria.php');
	require_once ('../controllers/subirArchivo.php');
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		/*Verificar si el metodo es llamado desde una forma*/				
		if(isset($_POST["nombre"]) && isset($_POST["categoria"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) 
			&& (!empty($_FILES)) && (isset($_GET['id']))){
			$producto = new Producto();
			$producto->id = $_GET['id'];
			$producto->nombre = $_POST["nombre"];
			$producto->categoria = $_POST["categoria"];
			$producto->descripcion = $_POST["descripcion"];
			$producto->precio = $_POST["precio"];
			$producto->fecha_registro = date("Y-m-d H:i:s");
			//Subimos el archivo al servidor
			$archivo = new Archivo();
			if ($archivo->upload((string)$producto->nombre, (string)$producto->categoria)){
				$producto->foto = $archivo->file;
				/*Guardamos la instancia en la base de datos*/
				$resultado = $producto->actualiza();
				if($resultado == 1){
					/*Redirigir a la lista de los usuarios*/
					header("location: ../controllers/listaProductos.php");
				}else{
					/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR AL USUARIO EN LA BASE DE DATOS*/
				}
			}else{
				/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR LA FOTO DEL ARCHIVO*/
			}	
		}else{
			/*Si no es llamado desde una forma, redirigir a la forma para que la llenen y poder registrar el usuario*/
			//Mandarle las categorias disponibles para que pueda registrar el producto
			$categoria = new Categoria();
			$lista = $categoria->busca_todos();
			$producto = new Producto();
			$id = $_GET['id'];
			$producto->busca($id);
			include_once("../views/editarProducto.php");
		}
	}else{
		/*No es administrador, por lo tanto no tiene los permisos para estar aqui*/
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>
