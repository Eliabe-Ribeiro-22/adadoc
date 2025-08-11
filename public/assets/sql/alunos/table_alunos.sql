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