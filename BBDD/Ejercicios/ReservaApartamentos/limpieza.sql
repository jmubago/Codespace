
CREATE TABLE limpieza (
	id TINYINT IDENTITY (1,1) NOT NULL
	, estado BIT NOT NULL
	, CONSTRAINT PK_limpieza_limpiezaID PRIMARY KEY CLUSTERED (id)
);