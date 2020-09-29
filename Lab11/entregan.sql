SET DATEFORMAT DMY
BULK INSERT a1423485.a1423485.[Entregan]
FROM 'e:\wwwroot\rcortese\entregan.csv'
	WITH
	(
		CODEPAGE = 'ACP',
        FIELDTERMINATOR = ',',
        ROWTERMINATOR = '\n'
		
	)

SELECT * FROM Entregan