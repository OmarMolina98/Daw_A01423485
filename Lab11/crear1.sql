/* Se crean las tablas*/

CREATE TABLE Materiales
(

	Clave numeric(5),
	Descripci�n varchar(50),
	Costo numeric(8,2)

)

CREATE TABLE Proveedores
(

	RFC char(13),
	RazonSocial varchar(50)

)

CREATE TABLE Proyectos
(

	Numero numeric(5),
	Denominaci�n varchar(50)

)

CREATE TABLE Entregan
(

	Clave numeric(5),
	RFC char(13),
	Numero numeric(5),
	Fecha datetime,
	Cantidad numeric(8,2)

)
/* Se borran posteriormente*/

DROP TABLE Materiales
DROP TABLE Proveedores
DROP TABLE Proyectos
DROP TABLE Entregan

/* Puedes ver si hay tablas o no */

select * from sysobjects where xtype='U'


  