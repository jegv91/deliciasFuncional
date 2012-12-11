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
}
?>
