<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		require_once ('../models/producto.php');
		//Objeto producto
		$producto=new Producto();
		//Array asociativo con la informacion de cada pastel
		$listaPasteles=$producto->busca_productos(1);
		//Array asociativo con la informacion de cada cupcake
		$listaCupcakes=$producto->busca_productos(2);
		//Array asociativo con la informacion de cada pay
		$listaPays=$producto->busca_productos(3);
		//Array asociativo con la informacion de cada pan
		$listaPanes=$producto->busca_productos(4);
		include_once ("../views/listaProductos.php");
	}else{
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>
