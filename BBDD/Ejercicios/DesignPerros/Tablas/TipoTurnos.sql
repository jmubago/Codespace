CREATE TABLE TipoTurnos (
	id TINYINT IDENTITY (1,1) NOT NULL
	, Turno VARCHAR (15) NOT NULL  
	, CONSTRAINT PK_TipoTurnos_TipoTurnosID PRIMARY KEY CLUSTERED (id)
);