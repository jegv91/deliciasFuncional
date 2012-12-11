<?php 
	require_once("../models/usuario.php");
	/*Verifica si es la primera vez que se entro al sistema*/
	$usuario = new Usuario();
	$result = $usuario->busca_administrador(0);
	/*Si no encontro ningun administrador, tiene que redirigirlo a la creacion de un nuevo admin*/
	if ($result == 0){
		/*verificamos si no hemos recibido un metodo post*/	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			/*Verificar si el metodo es llamado desde una forma*/		
			if(isset($_POST["email"]) && isset($_POST["nombre"]) && isset($_POST["password"]) 
				&& isset($_POST["c_password"]) && (!empty($_FILES))){
				/*Verificar si no es un administrador y ya hay uno agregado en el sistema*/
				$usuario = new Usuario();
				$usuario->email=$_POST["email"];
				$usuario->nombre=$_POST["nombre"];
				if($_POST["password"] == $_POST["c_password"]){
					$usuario->password=substr(md5($_POST["password"]),0, 20);
				}else{
					//REDIRIGIR AL CONTROLADOR DE ERRORES INDICANDO QUE LOS PASSWORDS NO COINCIDEN
				}
				$usuario->tipo=0;
				$usuario->primera_vez=1;
				$usuario->fecha_registro = date("Y-m-d H:i:s");
				//Subimos el archivo al servidor
				$archivo = new Archivo();
				if ($archivo->upload((string)$usuario->email , get_class($usuario))){
					$usuario->foto = $archivo->file;
					/*Guardamos la instancia en la base de datos*/
					$resultado = $usuario->guarda();
					if($resultado == 1){
						/*Redirigir a la lista de los usuarios*/
						header("location: ../controllers/index.php");
					}else{
						/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR AL USUARIO EN LA BASE DE DATOS*/
					}
				}else{
					/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR LA IMAGEN DEL USUARIO*/
				}
			}else{
				//ALGO LE HIZO FALTA DE PROPORCIONAR
				
			}	
		}else{
			include_once("../views/registraAdministrador.php");
		}	
	}else{		
		header("location: ../controllers/index.php");
	}
?>