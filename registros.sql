/*
  Cuando colocamos la instruccion BEGIN (start a transaction block) estamos indicando
  que las setencias sql que coloquemos dentro de este bloque no se veran
  reflejadas en la base de datos hasta que coloquemos la sentencia:
                           commit;
                             O
                            end;
*/
BEGIN;

INSERT INTO DEPARTAMENTO (nombre) VALUES ('colores');
INSERT INTO DEPARTAMENTO (nombre) VALUES ('papeles');
INSERT INTO DEPARTAMENTO (nombre) VALUES ('gomas');
INSERT INTO DEPARTAMENTO (nombre) VALUES ('oleos');

INSERT INTO PRODUCTO (nombre, precio, id_departamento) VALUES ('prisma color', 150, 1);
INSERT INTO PRODUCTO (nombre, precio, id_departamento) VALUES ('cartulina', 3.5, 2);
INSERT INTO PRODUCTO (nombre, precio, id_departamento) VALUES ('factis', 9, 3);
INSERT INTO PRODUCTO (nombre, precio, id_departamento) VALUES ('amarillo medio', 28, 4);

COMMIT;
