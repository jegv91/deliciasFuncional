<?php
	define('SALT_LENGTH', 5);
	require_once ('../models/usuario.php');
	require_once ('../models/cliente.php');
	require_once ('../controllers/subirArchivo.php');
	/*Verificar si el metodo es llamado desde una forma*/		
	if(isset($_POST["email"]) && isset($_POST["nombre"]) && isset($_POST["password"]) && isset($_POST["fechaNacimiento"]) 
	    && isset($_POST["c_password"]) && isset($_POST["sexo"]) && (!empty($_FILES))){
		/*Verificar si no es un administrador y ya hay uno agregado en el sistema*/
		$usuario = new Usuario();
		$cliente = new Cliente();
		$usuario->email=$_POST["email"];
		$usuario->nombre=$_POST["nombre"];
		if($_POST["password"] == $_POST["c_password"]){
			$usuario->password=substr(md5($_POST["password"]),0, 20);
		}else{
			//REDIRIGIR AL CONTROLADOR DE ERRORES INDICANDO QUE LOS PASSWORDS NO COINCIDEN
		}
		$usuario->tipo=3;
		$usuario->primera_vez=1;
		$usuario->fecha_registro = date("Y-m-d H:i:s");
		$cliente->email = $_POST["email"];
		$cliente->direccion = $_POST["direccion"];
		$cliente->fechaNacimiento = $_POST["fechaNacimiento"];
		$cliente->sexo = $_POST["sexo"];
		$cliente->telefono = $_POST["telefono"];
		$cliente->celular = $_POST["celular"];
		//Subimos el archivo al servidor
		$archivo = new Archivo();
		if ($archivo->upload((string)$usuario->email , get_class($usuario))){
			$usuario->foto = $archivo->file;
			/*Guardamos la instancia en la base de datos*/
			$resultado1 = $usuario->guarda();
			$resultado2 = $cliente->guarda();
			if($resultado1 == 1 && $resultado2 == 1){
				/*Redirigir a la lista de los usuarios*/
				header("location: ../controllers/index.php");
			}else{
				/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR AL USUARIO EN LA BASE DE DATOS*/
			}
		}else{
			/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR LA IMAGEN DEL USUARIO*/
		}
	}else{
		/*Si no es llamado desde una forma, redirigir a la forma para que la llenen y poder registrar el usuario*/
		include_once("../views/registraCliente.php");
	}
?>
