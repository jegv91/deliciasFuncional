CREATE TABLE usuario (
	email VARCHAR (200) NOT NULL,
	nombre VARCHAR (200),
	password VARCHAR(20),
	foto VARCHAR(200),
	tipo INT NOT NULL,
	primera_vez INT NOT NULL DEFAULT 0,
	fecha_registro TIMESTAMP DEFAULT NOW(),
	PRIMARY KEY (email)
)Engine=InnoDB;

CREATE TABLE cliente (
	email VARCHAR (200) NOT NULL,
	fechaNacimiento TIMESTAMP NOT NULL,
	sexo INT NOT NULL,
	direccion VARCHAR (200),
	telefono VARCHAR(20),
	celular VARCHAR(20),
	PRIMARY KEY (email),
	FOREIGN KEY (email) REFERENCES usuario(email)
)Engine=InnoDB;

CREATE TABLE categoria(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200),
	tipo INT NOT NULL,
	descripcion TEXT NOT NULL,
	PRIMARY KEY(id)
)Engine=InnoDB;

CREATE TABLE producto(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200) NOT NULL,
	categoria INT NOT NULL,
	descripcion TEXT NOT NULL,
	precio DECIMAL NOT NULL DEFAULT 0,
	foto VARCHAR(254) NOT NULL,
	fecha_registro TIMESTAMP DEFAULT NOW(),
	PRIMARY KEY(id),
	FOREIGN KEY (categoria) REFERENCES categoria (id)
)Engine=InnoDB;

CREATE TABLE orden(
	id INT NOT NULL AUTO_INCREMENT,
	cliente VARCHAR(200) NOT NULL,
	fecha TIMESTAMP DEFAULT NOW(),
	cancelada INT NOT NULL DEFAULT 0,
	PRIMARY KEY (id),
	FOREIGN KEY (cliente) REFERENCES cliente(email)
)Engine=InnoDB;

CREATE TABLE detalleOrden(
	orden INT NOT NULL,
	producto INT NOT NULL,
	cantidadProducto INT NOT NULL,
	precioUnitario DECIMAL NOT NULL,
	PRIMARY KEY (orden,producto),
	FOREIGN KEY (orden) REFERENCES orden(id),
	FOREIGN KEY (producto) REFERENCES producto(id)
)Engine=InnoDB;


CREATE TABLE noticia(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200), 
	descripcion TEXT,
	creador VARCHAR (200) NOT NULL,
	fecha_creacion TIMESTAMP DEFAULT NOW(),
	fecha_expiracion TIMESTAMP NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (creador) REFERENCES usuario(email) 
)Engine=InnoDB;
