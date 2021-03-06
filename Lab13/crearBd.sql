  /* Se eliminan primero las tablas que anteriormente se crearon
 
  
  */

	
    IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Materiales') 

	DROP TABLE Materiales
	CREATE TABLE Materiales
	(

	  Clave numeric(5) not null,
	  Descripcion varchar(50),
	  Costo numeric (8,2)
	
	)	

	IF exists(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='Proveedores')

	DROP TABLE Proveedores
	CREATE TABLE Proveedores
	(

    RFC char(13) not null,
    RazonSocial varchar(50)
	
	)

	IF exists(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='Proyectos')
	DROP TABLE Proyectos
	CREATE TABLE Proyectos
	(

		Numero numeric(5) not null,
		Denominacion varchar(50)
	
	)

	IF exists(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='Entregan')
	DROP TABLE Entregan

	CREATE TABLE Entregan
	(
		
		Clave numeric(5) not null,
		RFC char(13) not null,
		Numero numeric(5) not null,
		Fecha datetime not null,
		Cantidad numeric (8,2)
	
	)

	/*Cargar datos de cada una de las tablas*/



   BULK INSERT a1423485.a1423485.[Materiales]
   FROM 'e:\wwwroot\rcortese\materiales.csv'
   WITH
   (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
   )

   BULK INSERT a1423485.a1423485.[Proyectos]
   FROM 'e:\wwwroot\rcortese\proyectos.csv'
   WITH
   (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
   )


   BULK INSERT a1423485.a1423485.[Proveedores]
   FROM 'e:\wwwroot\rcortese\proveedores.csv'
   WITH
   (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
   )

   SET DATEFORMAT dmy

   BULK INSERT a1423485.a1423485.[Entregan]

   FROM 'e:\wwwroot\rcortese\entregan.csv'
	
   WITH
   (
	   CODEPAGE = 'ACP',
	   FIELDTERMINATOR = ',',
	   ROWTERMINATOR='\n'
			
   )

