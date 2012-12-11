<?php
include_once("../models/activeRecord.php");

/* Clase USER, extiende de Active 
 ** @author: JEGV
 */

class Orden extends Active{
    private $id;
	private $cliente;
    private $fecha;
	private $cancelada;

    public function __constructor() {
		parent::__construct();
    }

    public function __set($var, $val){
		$this->$var = $val;
    }

    public function __get($var){
		return $this->$var;
    }
	
	public function busca_ordenes($cliente) {
		$sentencia = "SELECT * FROM Orden O WHERE O.cliente = '$cliente'";
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
