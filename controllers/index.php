<?php
	include_once('../models/categoria.php');
	if(!isset($_SESSION)){
		session_start();
	}
	
	/*Cargar todas las categorias que esten en la base de datos*/
	$categoria = new Categoria();
	$usuario = "";
	
	if(isset($_SESSION['user_type'])){
		if($_SESSION['user_type'] == 3){
			$usuario = $_SESSION['user_id'];
		}
	}
	$lista = $categoria->busca_todos();
	include_once("../views/index.php");
?>
