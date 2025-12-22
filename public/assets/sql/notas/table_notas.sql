-- create
CREATE TABLE NOTAS(
	ID_NOTA int primary_key autoincrement NOT NULL,
	NOME_ALUNO string not null,
	FAIXA_ETARIA_ALUNO string not null,
	VALOR_NOTA integer not null,
	DATA_NOTA date not null,
);

-- insert - tested
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

-- update - tested
UPDATE `notas` 
	SET	`NOME_ALUNO`='Camila de Oliveira',
	`FAIXA_ETARIA_ALUNO`='ADAD mirim',
	`VALOR_NOTA`='5',
	`DATA_NOTA`='2025-01-26',
	`created_at`='2025-12-22',
	`updated_at`='2025-12-22' 
	WHERE `id`='5';

-- select - tested
SELECT * FROM NOTAS ORDER BY DATA_NOTA DESC;

-- tested
SELECT DATA_NOTA, VALOR_NOTA, FAIXA_ETARIA_ALUNO, NOME_ALUNO FROM NOTAS ORDER BY DATA_NOTA DESC;