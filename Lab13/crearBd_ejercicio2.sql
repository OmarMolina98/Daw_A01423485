 SELECT * from Materiales
 INSERT INTO Materiales values(1000, 'xxx', 1000) 
 Delete from Materiales where Clave = 1000 and Costo = 1000 
 ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY (Clave) 
 INSERT INTO Materiales values(1000, 'xxx', 1000) 
 /*sp_helpconstraint materiales*/ 
 ALTER TABLE Proveedores ADD CONSTRAINT llaveProveedores PRIMARY KEY (RFC)
 ALTER TABLE Proyectos ADD CONSTRAINT llaveProyectos PRIMARY KEY (Numero)
 ALTER TABLE Entregan ADD CONSTRAINT llaveEntregan PRIMARY KEY (Clave, RFC, Numero, Fecha)