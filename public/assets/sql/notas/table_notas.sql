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

-- update
UPDATE `notas` SET `id`='[value-1]',`NOME_ALUNO`='[value-2]',`FAIXA_ETARIA_ALUNO`='[value-3]',`VALOR_NOTA`='[value-4]',`DATA_NOTA`='[value-5]',`created_at`='[value-6]',`updated_at`='[value-7]' WHERE 1
-- select - tested
SELECT * FROM NOTAS ORDER BY DATA_NOTA DESC;
-- tested
SELECT DATA_NOTA, VALOR_NOTA, FAIXA_ETARIA_ALUNO, NOME_ALUNO FROM NOTAS ORDER BY DATA_NOTA DESC;