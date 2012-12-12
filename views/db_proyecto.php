<?php
$conexion = mysql_connect("localhost","root","");

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
  foto VARCHAR(254) NOT NULL,
  password VARCHAR(20),
  tipo INT NOT NULL,
  primera_vez INT NOT NULL DEFAULT 0,
  fecha_registro TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (email)
)Engine=InnoDB;");
mysql_query($usuario, $conexion);
echo "<br> usuario";

/***** Tabla Clientes **************/
mysql_query("drop table cliente;");
$cliente=("CREATE TABLE IF NOT EXISTS cliente (
  email VARCHAR (200) NOT NULL,
  direccion VARCHAR (300),
  telefono TEXT NOT NULL,
  fechaNacimiento TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (email),
  FOREIGN KEY (email) REFERENCES Usuario (email)
)Engine=InnoDB;");
mysql_query($cliente, $conexion);
echo "<br> Cliente";

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

/***** Tabla Orden **************/
mysql_query("drop table orden;");
$orden=("CREATE TABLE orden(
  id INT NOT NULL AUTO_INCREMENT,
  cliente VARCHAR(200) NOT NULL,
  fecha TIMESTAMP DEFAULT NOW(),
  estatus INT NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  FOREIGN KEY (cliente) REFERENCES cliente(email)
)Engine=InnoDB;");
mysql_query($orden, $conexion);
echo "<br> orden";

/***** Tabla detalleOrden **************/
mysql_query("drop table detalleOrden;");
$detalleOrden=("CREATE TABLE detalleOrden(
  orden INT NOT NULL,
  producto INT NOT NULL,
  cantidadProducto INT NOT NULL,
  precioUnitario DECIMAL NOT NULL,
  PRIMARY KEY (orden,producto),
  FOREIGN KEY (orden) REFERENCES orden(id),
  FOREIGN KEY (producto) REFERENCES producto(id)
)Engine=InnoDB;");
mysql_query($detalleOrden, $conexion);
echo "<br> detalleOrden";






/***** Tabla Contador **************/
mysql_query("drop table contador;");
$contador=("CREATE TABLE IF NOT EXISTS contador ( 
    id int auto_increment, 
    ip varchar(20) not null, 
    num_visitas varchar(30) default 0 not null, 
    fecha datetime not null, 
    PRIMARY KEY(id) 
)Engine=InnoDB;");
mysql_query($contador, $conexion);
echo "<br> Contador";

echo "<br> se crearon todas las tablas";

