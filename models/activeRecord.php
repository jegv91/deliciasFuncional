<?php
/* Clase que permite manejar registros activos en la base de datos
 ** @author: JEGV
 */
include_once("../models/connection.php");

class Active {

    public function borra(){
		$tabla = get_class($this);
		$campos = $this->campos($tabla,true);
		$consulta = "DELETE FROM $tabla WHERE id = $this->id";
		$arreglo = $this->sentencia($consulta);
		return 1;
    }
	
    public function guarda() {
		$tabla = get_class($this);
		$campos = $this->campos($tabla, true);
		$valores = array();
		$tamanio = sizeof($campos);
		for ($i = 0; $i < $tamanio; $i++) {
			$elemento = explode("-",$campos[$i]);
			if ($elemento[2] == 'NO' && strlen($this->$elemento[0]) == 0 && $i > 0) {
				return 0;
			} else { 
				if (is_array($this->$elemento[0])) {
					$string = json_encode($this->$elemento[0], JSON_FORCE_OBJECT);
					$string = "JSON_ARR" . $string;
					$valores[] = $string;
				} else {
					$valores[] = $this->$elemento[0]; 
				}
			}
		}
		$campos = $this->campos($tabla);
		$consulta = "INSERT INTO $tabla (" . implode(",",$campos) . ") VALUES ('" . implode("','", $valores) . "')";
		$arreglo = $this->sentencia($consulta);
		$consulta = "SELECT LAST_INSERT_ID()";
		$arreglo = $this->sentencia($consulta);
		if ($arreglo) {
			$arr = mysql_fetch_array($arreglo);
			$this->id = $arr[0];
			return 1;
		}
		return 0;
    }
	
    public function actualiza() {
		$tabla = get_class($this);
		$campos = $this->campos($tabla, true);
		$valores = array();
		$tamanio = sizeof($campos);
		for ($i = 0; $i < $tamanio; $i++) {
			$elemento = explode("-",$campos[$i]);
			if ($elemento[2] == 'NO' && strlen($this->$elemento[0]) == 0 && $i > 0) {
				return 0;
			} else { 
				if (is_array($this->$elemento[0])) {
					$string = json_encode($this->$elemento[0], JSON_FORCE_OBJECT);
					$string = "JSON_ARR" . $string;
					$valores[] = $string;
				} else {
					$valores[] = $this->$elemento[0]; 
				}
			}
		}
		$campos = $this->campos($tabla);
		$consulta = "UPDATE $tabla SET ";
		foreach ($campos as $key => $value) {
			if ($key == 0) {
				continue;
			}
			if ($key > 1) {
				$consulta .= ",";
			}
			if (is_numeric($valores[$key])) {
				$consulta .= ($campos[$key] . "=" . $valores[$key]);
			} else {
				$consulta .= ($campos[$key] . "='" . $valores[$key] ."'");
			}
		}
		$consulta .= " WHERE id=$valores[0]";
		$arreglo = $this->sentencia($consulta);
		$this->busca($this->id);
		return 1;
    }
	
    public function busca($codigo) {
		$tabla = get_class($this);
		$campos = $this->campos($tabla);
		$sentencia = "SELECT * FROM $tabla WHERE $campos[0] = '$codigo'";
		$arreglo = $this->sentencia($sentencia);
		$numero = mysql_num_rows($arreglo);
		if ($numero > 0) {
			$this->definevalores($tabla, $arreglo);
			return 1;
		} else { 
			return 0; 
		}
    }
	
	public function busca_administrador($codigo) {
		$tabla = get_class($this);
		$campos = $this->campos($tabla);
		$sentencia = "SELECT * FROM $tabla WHERE $campos[3] = '$codigo'";
		$arreglo = $this->sentencia($sentencia);
		$numero = mysql_num_rows($arreglo);
		if ($numero > 0) {
			$this->definevalores($tabla, $arreglo);
			return 1;
		} else { 
			return 0; 
		}
    }
	
    public function busca_todos() {
		$tabla = get_class($this);
		$sentencia = "SELECT * FROM $tabla";
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
	
    protected function sentencia($query) {
		$con = new Connection(); 
		$sentencia = mysql_query($query, $con->connect());
		if ($sentencia) { 
			return $sentencia;
		} else {
			set_error_handler($this->error_handler());
			return false;
		}
    }
	
    protected function definevalores($tabla, $arreglo) {
		$campos = $this->campos($tabla);
		$contenido = mysql_fetch_array($arreglo);
		foreach ($campos as $valor) {
			if (is_string($contenido[$valor])) {
			if (preg_match("/JSON_ARR/", $contenido[$valor])) {
				$temp = str_replace("JSON_ARR", "", $contenido[$valor]);
				$temp = json_decode($temp, true);
				$contenido[$valor] = $temp;
			}
			}
			$this->$valor = $contenido[$valor];
		}
    }
	
    protected function campos($tabla, $detalles = false) {
		$columnas = array();
		$sentencia = "SHOW COLUMNS FROM $tabla";
		$consulta = $this->sentencia($sentencia);
		$numero = mysql_num_fields($consulta);
		while ($arreglo = mysql_fetch_array($consulta)) {
			$parametro = $arreglo[0];
			if ($detalles==true) {
				for($i = 1; $i < $numero; $i++) {
					$parametro = $parametro . "-" . $arreglo[$i];
				}
			}
			$columnas[] = $parametro;
		}
		return $columnas;
    }
    
	function error_handler() {
		die("Lo sentimos, ha ocurrido un error en ActiveRecord.");
		return true;
    }
	
    public function print_obj() {
		$tabla = get_class($this);
		$campos = $this->campos($tabla);
		foreach ($campos as $key => $value) {
			if ($key > 0) {
				echo ",";
			}
			if (is_array($this->$value)) {
				print_r($this->$value);
			} else {
				echo $this->$value;
			}
		}
		echo "\n";
    }
}
?>
