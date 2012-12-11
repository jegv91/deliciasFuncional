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
		//Manda a llamar al carrito indicandole los productos que se encuentran disponibles
		require_once("../models/producto.php");
		$producto = new Producto();
		$lista = $producto->busca_todos();
		include_once("../views/smartCart.php");
	}
?>
