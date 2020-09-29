
	INSERT INTO entregan values (1000, 'AAAA800101', 5000, GETDATE(), 0); 
	DELETE FROM Entregan WHERE Cantidad = 0 
	ALTER TABLE entregan add constraint cantidad CHECK (Cantidad > 0) ; 
	INSERT INTO entregan values (1000, 'AAAA800101', 5000, GETDATE(), 0);

