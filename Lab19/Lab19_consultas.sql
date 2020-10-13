<<<<<<< HEAD
--Materiales(Clave, Descripción, Costo, PorcentajeImpuesto)
--Proveedores(RFC, RazonSocial)
--Proyectos(Numero, Denominacion)
--Entregan(Clave, RFC, Numero, Fecha, Cantidad) 

--code La suma de las cantidades e importe total de todas las entregas realizadas durante el 97. 
SET DATEFORMAT dmy
SELECT SUM(E.cantidad) as TotalCantidad, SUM(E.cantidad* M.costo) as Importe
FROM Entregan E, Materiales M
WHERE E.Clave=M.Clave AND E.Fecha BETWEEN '01/01/1997' AND '31/12/1997'

--code Para cada proveedor, obtener la razón social del proveedor, número de entregas e importe total de las entregas realizadas. 

SELECT P.RazonSocial as RazonSocial, SUM(E.cantidad* M.costo) as ImporteTotal, COUNT(E.RFC) as NumeroEntregas
FROM Proveedores as P, Entregan as E, Materiales as M
WHERE P.RFC=E.RFC AND E.Clave=M.Clave
GROUP BY P.RazonSocial


--code Por cada material obtener la clave y descripción del material, la cantidad total entregada, la mínima cantidad entregada, 
--la máxima cantidad entregada, el importe total de las entregas de aquellos materiales en los que la cantidad promedio entregada 
--sea mayor a 400. 

SELECT M.Clave, M.Descripcion, SUM(Cantidad) as Cantidad, MIN(Cantidad) as Minima, MAX(Cantidad) as Maxima, SUM(E.Cantidad* M.Costo) as ImporteTotal
FROM Materiales as M, Entregan as E
WHERE M.Clave=E.Clave
GROUP BY M.Clave, M.Descripcion
HAVING AVG(Cantidad)>400


--code Para cada proveedor, indicar su razón social y mostrar la cantidad promedio de cada material entregado, 
--detallando la clave y descripción del material, 
--excluyendo aquellos proveedores para los que la cantidad promedio sea menor a 500. 

SELECT P.RazonSocial as RazonSocial, AVG(Cantidad) as Cantidad, M.Clave, M.Descripcion
FROM Proveedores P, Entregan E, Materiales M
WHERE M.Clave=E.Clave AND P.RFC=E.RFC
GROUP BY P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(Cantidad) > 500

 
--code Mostrar en una solo consulta los mismos datos que en la consulta anterior pero para dos grupos de proveedores: 
--aquellos para los que la cantidad promedio entregada es menor a 370 y 
--aquellos para los que la cantidad promedio entregada sea mayor a 450.

SELECT P.RazonSocial, AVG(E.Cantidad), M.Clave, M.Descripcion
FROM Materiales M, Entregan E, Proveedores P
WHERE M.Clave = E.Clave and P.RFC = E.RFC
GROUP BY P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(E.Cantidad)<370 OR AVG(E.Cantidad)>450


--INSERT INTO tabla VALUES (valorcolumna1, valorcolumna2, [...] , valorcolumnan) ;

INSERT INTO Materiales VALUES (2021,'Madera', 2000)
INSERT INTO Materiales VALUES (2022,'Glowstone',2000 )
INSERT INTO Materiales VALUES (2023,'Roca', 2000)
INSERT INTO Materiales VALUES (2024,'Arsilla',2000 )
INSERT INTO Materiales VALUES (2025,'Redstone', 2000)



--code Clave y descripción de los materiales que nunca han sido entregados.


SELECT M.Clave, M.Descripcion
FROM Materiales as M
WHERE M.Clave NOT IN(
	
	SELECT Clave
	FROM Entregan
)


--code Razón social de los proveedores que han realizado entregas tanto al proyecto 'Vamos México' como al proyecto 'Querétaro Limpio'.


SELECT DISTINCT RazonSocial
FROM Proyectos Pr, Entregan E, Proveedores P
WHERE P.RFC=E.RFC AND Pr.Numero = E.Numero AND Pr.Denominacion='Vamos Mexico' AND P.RFC IN(
															
															SELECT P.RFC
															FROM Proyectos Pr, Entregan E, Proveedores P
															WHERE E.RFC=P.RFC AND E.Numero=Pr.Numero AND Pr.Denominacion='Queretaro Limpio'
															)



--code Descripción de los materiales que nunca han sido entregados al proyecto 'CIT Yucatán'.

SELECT DISTINCT M.Descripcion
FROM Materiales as M
WHERE M.Clave NOT IN(
		SELECT M.Clave
		FROM Materiales M, Entregan E, Proyectos P
		WHERE M.Clave=E.Clave AND P.Numero=E.Numero AND P.Denominacion = 'CIT Yucatan'

					)



--code Razón social y promedio de cantidad entregada de los proveedores cuyo promedio de cantidad 
--entregada es mayor al promedio de la cantidad entregada por el proveedor con el RFC 'VAGO780901'.

SELECT P.RazonSocial
FROM Proveedores P, Entregan E
WHERE P.RFC = E.RFC
GROUP BY P.RazonSocial
HAVING AVG(E.Cantidad) > (
	SELECT AVG(E.Cantidad) 
	FROM Proveedores P, Entregan E
	WHERE P.RFC = E.RFC AND P.RFC = 'VAGO780901'
)



--code RFC, razón social de los proveedores que participaron en el proyecto 'Infonavit Durango' 
--y cuyas cantidades totales entregadas en el 2000 fueron mayores a las cantidades totales entregadas en el 2001. 

SELECT P.RFC, RazonSocial
FROM Proveedores P, Entregan E, Proyectos Pr
WHERE Pr.Denominacion='Infonavit Durango'
AND
(
	SELECT SUM(Cantidad) as total
	FROM Entregan as E
	WHERE Fecha BETWEEN '2000/01/01' AND '2000/12/31'

)>
(
	SELECT SUM(Cantidad) as total
	FROM Entregan as E
	WHERE Fecha BETWEEN '2001/01/01' AND '2001/12/31'
)
=======
--Materiales(Clave, Descripción, Costo, PorcentajeImpuesto)
--Proveedores(RFC, RazonSocial)
--Proyectos(Numero, Denominacion)
--Entregan(Clave, RFC, Numero, Fecha, Cantidad) 

--code La suma de las cantidades e importe total de todas las entregas realizadas durante el 97. 
SET DATEFORMAT dmy
SELECT SUM(E.cantidad) as TotalCantidad, SUM(E.cantidad* M.costo) as Importe
FROM Entregan E, Materiales M
WHERE E.Clave=M.Clave AND E.Fecha BETWEEN '01/01/1997' AND '31/12/1997'

--code Para cada proveedor, obtener la razón social del proveedor, número de entregas e importe total de las entregas realizadas. 

SELECT P.RazonSocial as RazonSocial, SUM(E.cantidad* M.costo) as ImporteTotal, COUNT(E.RFC) as NumeroEntregas
FROM Proveedores as P, Entregan as E, Materiales as M
WHERE P.RFC=E.RFC AND E.Clave=M.Clave
GROUP BY P.RazonSocial


--code Por cada material obtener la clave y descripción del material, la cantidad total entregada, la mínima cantidad entregada, 
--la máxima cantidad entregada, el importe total de las entregas de aquellos materiales en los que la cantidad promedio entregada 
--sea mayor a 400. 

SELECT M.Clave, M.Descripcion, SUM(Cantidad) as Cantidad, MIN(Cantidad) as Minima, MAX(Cantidad) as Maxima, SUM(E.Cantidad* M.Costo) as ImporteTotal
FROM Materiales as M, Entregan as E
WHERE M.Clave=E.Clave
GROUP BY M.Clave, M.Descripcion
HAVING AVG(Cantidad)>400


--code Para cada proveedor, indicar su razón social y mostrar la cantidad promedio de cada material entregado, 
--detallando la clave y descripción del material, 
--excluyendo aquellos proveedores para los que la cantidad promedio sea menor a 500. 

SELECT P.RazonSocial as RazonSocial, AVG(Cantidad) as Cantidad, M.Clave, M.Descripcion
FROM Proveedores P, Entregan E, Materiales M
WHERE M.Clave=E.Clave AND P.RFC=E.RFC
GROUP BY P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(Cantidad) > 500

 
--code Mostrar en una solo consulta los mismos datos que en la consulta anterior pero para dos grupos de proveedores: 
--aquellos para los que la cantidad promedio entregada es menor a 370 y 
--aquellos para los que la cantidad promedio entregada sea mayor a 450.

SELECT P.RazonSocial, AVG(E.Cantidad), M.Clave, M.Descripcion
FROM Materiales M, Entregan E, Proveedores P
WHERE M.Clave = E.Clave and P.RFC = E.RFC
GROUP BY P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(E.Cantidad)<370 OR AVG(E.Cantidad)>450


--INSERT INTO tabla VALUES (valorcolumna1, valorcolumna2, [...] , valorcolumnan) ;

INSERT INTO Materiales VALUES (2021,'Madera', 2000)
INSERT INTO Materiales VALUES (2022,'Glowstone',2000 )
INSERT INTO Materiales VALUES (2023,'Roca', 2000)
INSERT INTO Materiales VALUES (2024,'Arsilla',2000 )
INSERT INTO Materiales VALUES (2025,'Redstone', 2000)



--code Clave y descripción de los materiales que nunca han sido entregados.


SELECT M.Clave, M.Descripcion
FROM Materiales as M
WHERE M.Clave NOT IN(
	
	SELECT Clave
	FROM Entregan
)


--code Razón social de los proveedores que han realizado entregas tanto al proyecto 'Vamos México' como al proyecto 'Querétaro Limpio'.


SELECT DISTINCT RazonSocial
FROM Proyectos Pr, Entregan E, Proveedores P
WHERE P.RFC=E.RFC AND Pr.Numero = E.Numero AND Pr.Denominacion='Vamos Mexico' AND P.RFC IN(
															
															SELECT P.RFC
															FROM Proyectos Pr, Entregan E, Proveedores P
															WHERE E.RFC=P.RFC AND E.Numero=Pr.Numero AND Pr.Denominacion='Queretaro Limpio'
															)



--code Descripción de los materiales que nunca han sido entregados al proyecto 'CIT Yucatán'.

SELECT DISTINCT M.Descripcion
FROM Materiales as M
WHERE M.Clave NOT IN(
		SELECT M.Clave
		FROM Materiales M, Entregan E, Proyectos P
		WHERE M.Clave=E.Clave AND P.Numero=E.Numero AND P.Denominacion = 'CIT Yucatan'

					)



--code Razón social y promedio de cantidad entregada de los proveedores cuyo promedio de cantidad 
--entregada es mayor al promedio de la cantidad entregada por el proveedor con el RFC 'VAGO780901'.

SELECT P.RazonSocial
FROM Proveedores P, Entregan E
WHERE P.RFC = E.RFC
GROUP BY P.RazonSocial
HAVING AVG(E.Cantidad) > (
	SELECT AVG(E.Cantidad) 
	FROM Proveedores P, Entregan E
	WHERE P.RFC = E.RFC AND P.RFC = 'VAGO780901'
)



--code RFC, razón social de los proveedores que participaron en el proyecto 'Infonavit Durango' 
--y cuyas cantidades totales entregadas en el 2000 fueron mayores a las cantidades totales entregadas en el 2001. 

SELECT P.RFC, RazonSocial
FROM Proveedores P, Entregan E, Proyectos Pr
WHERE Pr.Denominacion='Infonavit Durango'
AND
(
	SELECT SUM(Cantidad) as total
	FROM Entregan as E
	WHERE Fecha BETWEEN '2000/01/01' AND '2000/12/31'

)>
(
	SELECT SUM(Cantidad) as total
	FROM Entregan as E
	WHERE Fecha BETWEEN '2001/01/01' AND '2001/12/31'
)
>>>>>>> 049dba5903efe663220c9fed17f79dbb5e1cf59f
GROUP BY P.RFC