<?php
	if(!isset($_SESSION)){
		session_start();
	}
	//Recibe un arreglo con el id de los productos y la cantidad de productos que el cliente pidio
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_type'])){
		if($_SESSION['user_type'] == 3){
			require_once("../models/producto.php");
			require_once("../models/detalleOrden.php");
			require_once("../models/orden.php");
			/*Por cada elemento del arreglo que se recibe, buscamos el producto por id para crear la orden y agregar el detalle*/
			$array = $_POST; 
			if (empty($array)){
				/*No puedes tener una orden vacia*/
				http_response_code(403);
				$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+puedes+tener+una+orden+vacia."%3B%7D';
				include_once('../controllers/error.php');
				die();
			}
			$orden = new Orden();
			$orden->cliente = $_SESSION['user_id'];
			$fecha = time();
			$orden->fecha = date("j/n/Y", $fecha);
			$orden->estatus = 0;
			$orden->guarda();
			foreach($array as $elem1){
				foreach($elem1 as $elem){
					$productos = explode("|", $elem);
					$producto = new Producto();
					$producto->busca($productos[0]);
					$detalleOrden = new detalleOrden();
					$detalleOrden->orden = $orden->id;
					$detalleOrden->producto = $producto->id;
					$detalleOrden->cantidadProducto = $productos[1];
					$detalleOrden->precioUnitario = $producto->precio;
					$detalleOrden->guarda();
				}	
			}
			/*Cuando termine de guardar los productos redirige al cliente a la lista de ordenes de el*/
			$lista = $orden->busca_ordenes($orden->cliente);
			include_once("../views/listaOrdenes.php");
		}else{
			/*Indicar que el usuario no es un cliente*/
		}
	}else{
		/*No es administrador, por lo tanto no tiene los permisos para estar aqui*/
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>
