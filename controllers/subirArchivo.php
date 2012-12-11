<?php
class Archivo{

	public $file;

	public function upload($name, $folder){
		if (!empty($_FILES)) {
			$tempFile = $_FILES['file']['tmp_name'];
			$fileName = $_FILES['file']['name'];
			$fileName = explode(".", $fileName);
			$fileName['0'] = $name;
			$targetPath = '../Imagenes/' .$folder. '/';
			$this->file =  str_replace('//','/',$targetPath) . $fileName['0'].".".$fileName['1'];
			if (move_uploaded_file($tempFile, $this->file)){
				return true;
			} else {
				return false;
			}
		} else {
			echo "Error de archivo ";
			return false;
		}
	}
}
?>