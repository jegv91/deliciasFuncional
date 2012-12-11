<?php
include_once("../models/activeRecord.php");

/* Clase USER, extiende de Active 
 ** @author: JEGV
 */

class Usuario extends Active{
    private $email;
	private $nombre;
    private $foto;
	private $tipo;
    private $primera_vez;
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
}
?>
