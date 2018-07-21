/*Para importar un archivo .sql a postgres utilizamos el comando '\i rutaArchivo'*/

CREATE SEQUENCE departamento_pk_sec
INCREMENT by 1
MINVALUE 1
NO MAXVALUE
START WITH 1
NO CYCLE;

CREATE TABLE DEPARTAMENTO(
  departamento_id INT NOT NULL DEFAULT nextval('departamento_pk_sec'),
  nombre VARCHAR(25) NOT NULL,

  CONSTRAINT departamento_pk
    PRIMARY KEY(departamento_id)
);

CREATE SEQUENCE producto_pk_sec
INCREMENT by 1
MINVALUE 1
NO MAXVALUE
START WITH 1
NO CYCLE;

CREATE TABLE PRODUCTO(
  producto_id INT NOT NULL DEFAULT nextval('producto_pk_sec'),
  nombre VARCHAR(25) NOT NULL,
  precio FLOAT NOT NULL,
  id_departamento INT NOT NULL,

  CONSTRAINT producto_pk
    PRIMARY KEY(producto_id),
  CONSTRAINT departamento_producto_fk
    FOREIGN KEY(id_departamento)
    REFERENCES DEPARTAMENTO(departamento_id)
);

/*
  Si deseas eliminar todas las tablas dentro de un mismo esquema, podemos utilizar el siguiente comando:
  DROP SCHEMA public CASCADE;
  CREATE SCHEMA public;
*/
