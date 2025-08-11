CREATE TABLE CHAMADAS(
	ID_CHAMADA int primary_key autoincrement NOT NULL,
	DIA_CHAMADA datetime(dd/mm/yyyy at hh:mm) NOT NULL,
	FAIXA_ETÁRIA_ALUNOS nvarchar(20) NOT NULL,
	DIVISA_CHAMADA nvarchar(20) NOT NULL,
	PROFESSOR nvarchar(20),
	QUANTIDADE_ALUNOS_PRESENTES int not null,
	QUANTIDADE_ALUNOS_AUSENTES int not null,
	QUANTIDADE_ALUNOS_JUSTIFICADAS int not null,
	-- ID_ALUNOS_PRESENTES nvarchar(255) EX: 1,2,3,4,5,6,10
	-- ID_ALUNOS_AUSENTES
	-- ID_ALUNOS_JUSTIFICADOS
	-- nome dos alunos presentes, ausentes e justificados
);
