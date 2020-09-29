BULK INSERT a1423485.a1423485.[Proveedores]
FROM 'e:\wwwroot\rcortese\proveedores.csv'
	WITH
	(
		CODEPAGE = 'ACP',
        FIELDTERMINATOR = ',',
        ROWTERMINATOR = '\n'
	)

SELECT * FROM Proveedores