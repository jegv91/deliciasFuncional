<?php
include_once("../models/activeRecord.php");

/* Clase USER, extiende de Active 
 ** @author: JEGV
 */

class Cliente extends Active{
    private $email;
	private $fechaNacimiento;
	private $sexo;
	private $direccion;
	private $telefono;
	private $celular;

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
