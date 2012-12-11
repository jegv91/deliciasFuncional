<?php
$conexion = mysql_connect("localhost","admin2","delicias");

  if(!$conexion){
    die('No se ha podido conectar'.mysql_error());
  }
  mysql_query("drop database delicias");
  if(mysql_query("create database if not exists delicias",$conexion)){
    echo "Se ha creado la Base de datos";
  }
  else{
    echo "Error al crear la base de datos  ". mysql_error();
  }

mysql_select_db("delicias",$conexion);
                          

/***** Tabla Usuario **************/
mysql_query("drop table usuario;");
$usuario=("CREATE TABLE IF NOT EXISTS usuario (
  email VARCHAR (200) NOT NULL,
  nombre VARCHAR (200),
  password VARCHAR(20),
  tipo INT NOT NULL,
  primera_vez INT NOT NULL DEFAULT 0,
  fecha_registro TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (email)
)Engine=InnoDB;");
mysql_query($usuario, $conexion);
echo "<br> usuario";

/***** Tabla Noticias **************/
mysql_query("drop table noticias;");
$noticias=("CREATE TABLE IF NOT EXISTS noticia (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(200), 
  descripcion TEXT,
  creador VARCHAR (200) NOT NULL,
  fecha_creacion TIMESTAMP DEFAULT NOW(),
  fecha_expiracion TIMESTAMP NOT NULl,
  PRIMARY KEY (id),
  FOREIGN KEY (creador) REFERENCES usuario(email) 
)Engine=InnoDB;");
mysql_query($noticias, $conexion);
echo "<br> noticias";

/***** Tabla Categoria **************/
mysql_query("drop table categoria;");
$categoria=("CREATE TABLE IF NOT EXISTS categoria (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(200),
  tipo INT NOT NULL,
  descripcion TEXT NOT NULL,
  PRIMARY KEY(id)
)Engine=InnoDB;");
mysql_query($categoria, $conexion);
echo "<br> categoria";

/***** Tabla Producto *************/
mysql_query("drop table producto;");
$producto=("CREATE TABLE IF NOT EXISTS producto (
 id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(200) NOT NULL,
  categoria INT NOT NULL,
  descripcion TEXT NOT NULL,
  precio DECIMAL NOT NULL DEFAULT 0,
  foto VARCHAR(254) NOT NULL,
  fecha_registro TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY(id),
  FOREIGN KEY (categoria) REFERENCES categoria (id)
)Engine=InnoDB;");
mysql_query($producto, $conexion);
echo "<br> producto";


/***** Tabla Clientes **************/
mysql_query("drop table cliente;");
$cliente=("CREATE TABLE IF NOT EXISTS cliente (
  email VARCHAR (200) NOT NULL,
  nombre VARCHAR (200),
  direccion VARCHAR (300),
  telefono TEXT NOT NULL,
  fecha_nacimiento TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (email),
  FOREIGN KEY (email) REFERENCES Usuario (email)
)Engine=InnoDB;");
mysql_query($cliente, $conexion);
echo "<br> Cliente";

echo "<br> se crearon todas las tablas";

