<?php
	/*verificamos que sea un administrador*/
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		/*verifico que esten los parametros que necesito*/
		if(isset($_GET['id']) && isset($_GET['class'])){
			$id = $_GET['id'];
			$class = $_GET['class'];
			$item;
			switch ($class){
				case "usuario":
					require_once("../models/usuario.php");
					$item = new Usuario();
					break;
				case "noticia":
					require_once("../models/noticia.php");
					$item = new Noticia();
					break;
				case "producto":
					require_once("../models/producto.php");
					$item = new Producto();
					break;
				case "categoria":
					require_once("../models/categoria.php");
					$item = new Categoria();
					break;
			}		
			/*Eliminamos el item de la base de datos*/
			$item->busca($id);
			$result = $item->borra();
			if($result == 0){
				http_response_code(403);
				$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"Algo+salio+mal+con+el+borrado+de+los+datos+solicitados."%3B%7D';
				include_once('../controllers/error.php');
			}else{
				header('Location:' . getenv('HTTP_REFERER'));
			}
		}else{
			http_response_code(403);
			$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+datos+necesarios+para+accesar+a+este+contenido."%3B%7D';
			include_once('../controllers/error.php');
		}
	}else{
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>