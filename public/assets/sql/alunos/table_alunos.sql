CREATE TABLE ALUNOS(
	ID_ALUNO int primary_key autoincrement NOT NULL,
	NOME_ALUNO nvarchar(225) NOT NULL,
	FAIXA_ETARIA_ALUNO nvarchar(20) NOT NULL,
	ENDERECO_ALUNO nvarchar(255) NULL,
	DATA_NASCIMENTO_ALUNO datetime(dd/mm/yyyy) - time NOT NULL
	TELEFONE_ALUNO nvarchar(15) NULL,
	EMAIL_ALUNO nvarchar(50) NULL,
	CIDADE_ALUNO nvarchar(20) NULL,
);

-- INSERT - tested
INSERT INTO ALUNOS(
	NOME_ALUNO, 
	FAIXA_ETARIA_ALUNO, 
	ENDERECO_ALUNO, 
	DATA_NASCIMENTO_ALUNO, 
	TELEFONE_ALUNO,
	EMAIL_ALUNO, 
	CIDADE_ALUNO
	) 
VALUES(
	"Guilherme",
	"ADAD II",
	"Rua zezinho da fonseca, 123",
	"03/05/2025",
	"49 9 1234-5678",
	"gui@gmail.com",
	"Campo Belo do Sul"
);

-- DELETE - tested
DELETE * FROM ALUNOS WHERE ALUNOS.ID_ALUNO = 1;

-- SELECT - tested
SELECT * FROM `alunos` ORDER BY `alunos`.NOME_ALUNO ASC;
-- SELECIONAR SOMENTE ALGUNS CAMPOS. Quais campos?

-- UPDATE - tested
UPDATE `alunos` 
	SET `NOME_ALUNO`='Ezequiel da Silva Moreira',
	`FAIXA_ETARIA_ALUNO`='ADAD I',
	`ENDERECO_ALUNO`='RUA MAJOR AZAMBUJA, 345',
	`DATA_NASCIMENTO_ALUNO`='2007-12-17',
	`TELEFONE_ALUNO`='49 9 8764-0986',
	`EMAIL_ALUNO`='zequi@gmail.com',
	`CIDADE_ALUNO`='Ponte Alta do Norte',
	`created_at`='2025-12-22',
	`updated_at`='2025-12-22' 
	WHERE `id`='2';