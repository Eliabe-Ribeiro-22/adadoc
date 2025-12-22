-- create
CREATE TABLE NOTAS(
	ID_NOTA int primary_key autoincrement NOT NULL,
	NOME_ALUNO string not null,
	FAIXA_ETARIA_ALUNO string not null,
	VALOR_NOTA integer not null,
	DATA_NOTA date not null,
);

-- insert - 
INSERT INTO 
NOTAS(
	NOME_ALUNO, 
	FAIXA_ETARIA_ALUNO, 
	VALOR_NOTA, 
	DATA_NOTA
	) 
VALUES(
	'Ezequiel', 
	'adad 2', 
	10, 
	'2025-11-11'
	);

-- delete - tested
DELETE FROM NOTAS WHERE ID_NOTA = 3;

-- update

-- select - 
SELECT * FROM NOTAS order_by DESC DATA_NOTA;
SELECT DATA_NOTA, VALOR_NOTA, FAIXA_ETARIA_ALUNO, NOME_ALUNO FROM NOTAS order_by DESC DATA_NOTA;