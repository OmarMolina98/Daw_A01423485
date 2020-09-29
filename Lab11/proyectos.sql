BULK INSERT a1423485.a1423485.[Proyectos]
FROM 'e:\wwwroot\rcortese\proyectos.csv'
	WITH
	(
		CODEPAGE = 'ACP',
        FIELDTERMINATOR = ',',
        ROWTERMINATOR = '\n'
	)

SELECT * FROM Proyectos