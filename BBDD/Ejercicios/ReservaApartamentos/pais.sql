
CREATE TABLE nacionalidad_ID (
	id INT IDENTITY (1,1) NOT NULL
	, pais VARCHAR (50) NOT NULL
	, europa BIT NOT NULL
	, CONSTRAINT PK_pais_paisID PRIMARY KEY CLUSTERED (id)
	);