<?php
include_once("../models/activeRecord.php");

/* Clase USER, extiende de Active 
 ** @author: JEGV
 */

class detalleOrden extends Active{
    private $orden;
	private $producto;
    private $cantidadProducto;
	private $precioUnitario;

    public function __constructor() {
		parent::__construct();
    }

    public function __set($var, $val){
		$this->$var = $val;
    }

    public function __get($var){
		return $this->$var;
    }
}
?>
