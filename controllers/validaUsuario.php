<?php
	include_once('../models/usuario.php');
    session_start();

    // Funcion que prepara un array para enviarlo
    function array_envia($array) {
		$tmp = serialize($array);
		$tmp = urlencode($tmp);
		return $tmp;
    }
    // Datos proporcionados por el usuario
    $uid = $_POST['user'];
    $pass = $_POST['password'];
	//$pass2 = md5(crypt($pass,"delicias"));
	
    // Registro de los errores
    $error = "";
	
	//Inicio de las verificaciones
    if ($uid != "" && $pass != "") {
		/*creamos un usuario temporal para realizar la busqueda*/
		$userTemp = new Usuario();
		$userTemp->busca($uid);		
		// Si el usuario existe
		if ($userTemp != null) {	
			if (substr(md5($pass), 0, 20) == $userTemp->password) {
				$_SESSION['user_type'] = $userTemp->tipo;
				$_SESSION['user_id'] = $userTemp->email;
				/*Redireccionamos al usuario acuerdo a sus permisos*/
				switch($userTemp->tipo){
					/*El usuario es admin*/
					case 0: header("location: ../controllers/indexAdmin.php");
					break;
					/*El usuario es cliente*/
					case 3: header("location: ../controllers/index.php");
					break;
				}
			} else {
				//echo "La contrase&ntilde;ia es incorrecta";
				$error .= "El usuario no existe o la contrase&ntilde;a es incorrecta.";
			}			
		} else {
			//echo "No existe ese usuario";
			$error .= "El usuario no existe o la contrase&ntilde;a es incorrecta.";
		}
    } else {
		//echo "Debes especificar una contrase&ntilde;a y un usuario";
		$error .= "Debes especificar una contrase&ntilde;a y un usuario";
    }
    // Si hubo un error
    if ($error != "") {
		// Redirecciona a la pagina de errores
		$errores[] = $error;
		$errores = array_envia($errores);
		header("location: ../controllers/error.php?error=$errores");
    }
?>
