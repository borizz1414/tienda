CREATE DATABASE tienda_master;

CREATE TABLE usuarios(
    id int (255) AUTO_INCREMENT NOT NULL,
    nombre varchar (100) NOT NULL,
    apellidos varchar (255),
    email varchar (255) NOT NULL,
    password varchar (255) NOT NULL,
    rol varchar (20),
    imagen varchar (255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'admin','admin','admin@admin.com','123','administrador',NULL);

CREATE TABLE categorias(
    id int (255) AUTO_INCREMENT NOT NULL,
    nombre varchar (100) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY(id),
  
)ENGINE=InnoDb;
INSERT INTO categorias VALUES (null, 'Manga corta');
INSERT INTO categorias VALUES (null, 'Tirantes');
INSERT INTO categorias VALUES (null, 'Manga larga');
INSERT INTO categorias VALUES (null, 'Manga sudaderas');

CREATE TABLE productos(
    id int (255) AUTO_INCREMENT NOT NULL,
    categoria_id int (255) NOT NULL,
    nombre varchar (100) NOT NULL,
    descripcion text,
    precio float (100,2) NOT NULL,
    stock int (255) NOT NULL
    oferta varchar (2),
    fecha date not null,
    imagen varchar (255),
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_productos_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id);
)ENGINE=InnoDb;
CREATE TABLE pedidos(
    id int (255) AUTO_INCREMENT NOT NULL,
    usuario_id int (255) not null,
    provincia varchar (100) NOT NULL,
    localidad varchar (100) NOT NULL,
    direccion varchar (255) NOT NULL,
    coste float (200,2) not null,
    estado int (20) not null,
    fecha date,
    hora time,
    CONSTRAINT pk_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedidos_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id);
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
    id int (255) AUTO_INCREMENT NOT NULL,
    pedido_id int (255) not null,
    producto_id int (255) not null,
    unidades int (255 not null),
    CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id);
    CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id);
)ENGINE=InnoDb;