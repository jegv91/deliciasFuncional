<?php
include_once("../models/activeRecord.php");

/* Clase Categoria, extiende de Active 
 ** @author: JEGV
 */

class Categoria extends Active{
    private $id;
	private $nombre;
    private $tipo;
    private $descripcion;

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
