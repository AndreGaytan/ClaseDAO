CREATE DATABASE EJEMPLO;
USE EJEMPLO;

DROP TABLE IF EXISTS USUARIOS;
CREATE TABLE USUARIOS(
	UserID tinyint UNSIGNED NOT NULL,
    Username varchar(20) UNIQUE NOT NULL,
    Pwd varchar(20) NOT NULL,
    Nombre varchar(20) NOT NULL,
    Apellido varchar(20) NOT NULL
);

ALTER TABLE USUARIOS
ADD CONSTRAINT PK_USUARIOS PRIMARY KEY (UserID),
MODIFY UserID tinyint AUTO_INCREMENT;

/*NOTA: Ojo muchachos, esta parte del script, si lo van a correr en PhpMyAdmin tendrán que hacerlo por separado
es decir, copiaran y pegaran el script sin la definicion de los procedimientos almacenados, y despues en otro script
ejecutan dichos procedimientos, para hacerlo tendran que quitar la palabra delimiter, pero si dejaran el ??, es decir, asi
	CREATE PROCEDURE nombreDelMetodo()
		BEGIN
			Instrucciones..
		END
        ??
recuerden indicarle a PhpMyAdmin que el delimitador es ??, para indicarlo solo escribanlo en el campo de texto que se 
encuentra justo abajo de su script.
*/

Delimiter ??
CREATE PROCEDURE readAllUsuarios()
BEGIN
	SELECT *
    FROM USUARIOS;
END
??

Delimiter ??
CREATE PROCEDURE readUsuario(IN id int)
BEGIN
	SELECT *
    FROM USUARIOS
    WHERE UserID=id;
END
??

INSERT INTO USUARIOS(Username, Pwd, Nombre, Apellido) VALUES ('Usuario1','1234','Ernesto','Fierro');
INSERT INTO USUARIOS(Username, Pwd, Nombre, Apellido) VALUES ('Usuario2','1234','Hector','Gómez');
INSERT INTO USUARIOS(Username, Pwd, Nombre, Apellido) VALUES ('Usuario3','1234','Rainerio','Amézquita');
INSERT INTO USUARIOS(Username, Pwd, Nombre, Apellido) VALUES ('Usuario4','1234','Liliana','Prado');
INSERT INTO USUARIOS(Username, Pwd, Nombre, Apellido) VALUES ('Usuario5','1234','Miguel','Gómez');
INSERT INTO USUARIOS(Username, Pwd, Nombre, Apellido) VALUES ('Usuario6','1234','Andre','Hernández');
INSERT INTO USUARIOS(Username, Pwd, Nombre, Apellido) VALUES ('Usuario7','1234','André','Gaytan');

