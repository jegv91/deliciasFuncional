<?php
include_once("../models/activeRecord.php");

/* Clase USER, extiende de Active 
 ** @author: JEGV
 */

class Noticia extends Active{
    private $id;
	private $nombre;
    private $descripcion;
    private $creador;
	private $fecha_creacion;
    private $fecha_expiracion;

    public function __constructor() {
		parent::__construct();
    }

    public function __set($var, $val){
		$this->$var = $val;
    }

    public function __get($var){
		return $this->$var;
    }
	
	public function busca_recientes() {
		$tabla = get_class($this);
		$sentencia = "SELECT * FROM $tabla ORDER BY fecha_creacion DESC LIMIT 3";
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
