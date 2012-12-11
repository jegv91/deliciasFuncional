<?php
	if(!isset($_SESSION)){
		session_start();
	}
	define('SALT_LENGTH', 5);
	require_once ('../models/usuario.php');
	require_once ('../controllers/subirArchivo.php');
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==0){
		/*Verificar si el metodo es llamado desde una forma*/		
		if(isset($_POST["email"]) && isset($_POST["nombre"]) && isset($_POST["password"]) 
			&& isset($_POST["tipo"]) && isset($_POST["c_password"]) && (!empty($_FILES))){
			/*Verificar si no es un administrador y ya hay uno agregado en el sistema*/
			if ($_POST["tipo"] != 0){
				$usuario = new Usuario();
				$usuario->email=$_POST["email"];
				$usuario->nombre=$_POST["nombre"];
				if($_POST["password"] == $_POST["c_password"]){
					$usuario->password=substr(md5($_POST["password"]),0, 20);
					//md5(crypt($cpassword,"delicias"));
				}else{
					//REDIRIGIR AL CONTROLADOR DE ERRORES INDICANDO QUE LOS PASSWORDS NO COINCIDEN
				}
				$usuario->tipo=$_POST["tipo"];
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
						header("location: ../controllers/listaUsuarios.php");
					}else{
						/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR AL USUARIO EN LA BASE DE DATOS*/
					}
				}else{
					/*INFORMAR DE QUE HUBO UN ERROR AL GUARDAR LA IMAGEN DEL USUARIO*/
				}	
			}else{
				/*Como es administrador, tenemos que corroborar que no haya otro administrador en el sistema*/
				$usuario = new Usuario();
				if($usuario->busca_administrador() == 1){
					/*Notificar que ya no se puede agregar otro usuario administrador*/
				}
			}
		}else{
			/*Si no es llamado desde una forma, redirigir a la forma para que la llenen y poder registrar el usuario*/
			include_once("../views/registraUsuario.php");
		}
	}else{
		/*No es administrador, por lo tanto no tiene los permisos para estar aqui*/
		http_response_code(403);
		$error='a%3A1%3A%7Bi%3A0%3Bs%3A64%3A"No+tienes+los+permisos+necesarios+para+accesar+a+este+contenido."%3B%7D';
		include_once('../controllers/error.php');
	}
?>
