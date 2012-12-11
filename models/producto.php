<?php
include_once("../models/activeRecord.php");

/* Clase USER, extiende de Active 
 ** @author: JEGV
 */

class Producto extends Active{
	private $id;
    private $nombre;
	private $categoria;
    private $descripcion;
    private $precio;
	private $foto;
    private $fecha_registro;

    public function __constructor() {
		parent::__construct();
    }

    public function __set($var, $val){
		$this->$var = $val;
    }

    public function __get($var){
		return $this->$var;
    }
	
	public function busca_productos($tipo){
		$sentencia = "SELECT p.id, p.nombre, p.categoria, p.descripcion, p.precio, p.foto, p.fecha_registro
						FROM PRODUCTO P, CATEGORIA C
						WHERE p.categoria = c.id AND c.tipo = $tipo";
		$arreglo = $this->sentencia($sentencia);
		$numero = mysql_num_rows($arreglo);
		if ($numero > 0) {
			$resultado = array();
			while ($fila = mysql_fetch_array($arreglo)) {
				$resultado[] = $fila;
			}
			return $resultado;
		} else {
			return null; 
		}
	}
}
?>
