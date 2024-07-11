--creación de tablespace, usuario, tablas script para grupo
alter session set "_ORACLE_SCRIPT" = TRUE;

CREATE TABLESPACE edilit_data DATAFILE 'C:\Oracle\oradata\ORCL\edilit_data' SIZE 200M AUTOEXTEND ON;
CREATE TEMPORARY TABLESPACE edilit_tem TEMPFILE 'C:\Oracle\oradata\ORCL\edilit_temp' SIZE 200M AUTOEXTEND ON;'

CREATE USER edilit_root IDENTIFIED BY absc DEFAULT TABLESPACE edilit_data TEMPORARY TABLESPACE edilit_tem;

GRANT DBA TO edilit_root;

ALTER USER edilit_root QUOTA UNLIMITED ON "edilit_data";



CREATE TABLE usuarios
(
  cedula NUMBER NOT NULL,
    username varchar(20) NOT NULL,
    password varchar(512) NOT NULL,
    nombre VARCHAR(20),
    apellido1 VARCHAR(30),
    apellido2 VARCHAR(30),
    email VARCHAR(100),
    telefono VARCHAR(15),
    CONSTRAINT users_PK PRIMARY KEY (cedula)
    ); 
    
    
CREATE TABLE categorias
(
    id_categoria NUMBER NOT NULL,
    nom_categoria varchar(50),
    CONSTRAINT categoria_PK PRIMARY KEY (id_categoria)
);

create table editoriales
(
    id_editorial NUMBER NOT NULL,
    nom_editorial varchar(50),
    telefono NUMBER,
    sitio_web varchar(100),
    CONSTRAINT editorial_PK PRIMARY KEY (id_editorial)
);

create table libros
(
    ISBN NUMBER NOT NULL,
    id_editorial NUMBER,
    id_categoria NUMBER,
    titulo       varchar(100),
    autor        varchar(1000),
    sinopsis     varchar(3000),
    anyo         NUMBER,
    existencia   NUMBER,
    precio       NUMBER,
    CONSTRAINT libro_PK PRIMARY KEY (ISBN),
    CONSTRAINT fk_libro_editorial FOREIGN KEY (id_editorial) references editoriales (id_editorial),
    CONSTRAINT fk_libro_categoria FOREIGN KEY (id_categoria) references categorias (id_categoria)
);

CREATE TABLE facturas 
(
    id_factura NUMBER NOT NULL,
    cedula NUMBER,
    fecha_compra DATE,
    total NUMBER,
    CONSTRAINT factura_PK PRIMARY KEY (id_factura),
    CONSTRAINT FK_factura_usuario FOREIGN KEY (cedula) REFERENCES usuarios (cedula)
);

    
CREATE TABLE ventas 
(
    id_venta NUMBER NOT NULL,
    id_factura NUMBER NOT NULL,
    ISBN NUMBER,
    precio NUMBER,
    cantidad NUMBER,
    CONSTRAINT venta_PK PRIMARY KEY (id_venta),
    CONSTRAINT FK_venta_factura FOREIGN KEY (id_factura) references facturas (id_factura),
    CONSTRAINT FK_venta_libro FOREIGN KEY (ISBN) references libros (ISBN)
);