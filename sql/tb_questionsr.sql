create table actar.tb_questionsr (

	/*
		Tabela para a construcao de relacao das perguntas com:
		-> Deverá associar a pergunta a tabela: tb_vendor;
		-> Deverá associar a qual tecnologia a pergunta é referenciada na tabela: tb_tech
		-> Deverá associar qual departamento cabe a pergunta utilizando a tabela: tb_departamento
	*/

	idQuestionsR int auto_increment not null,
	idVendor int not null,
	idTech int not null,
	idDepartamento int not null,
	idQuestions int not null,
	constraint PK_QuestionR primary key(idQuestionsR),
	constraint PK_QuestionR_Vendor foreign key(idVendor)
		references actar.tb_vendor(idVendor),
	constraint PK_QuestionR_Tech foreign key(idTech)
		references actar.tb_tech(idTech),
	constraint PK_QuestionR_Departamento foreign key(idDepartamento)
		references actar.tb_departamento(idDepartamento),
	constraint PK_QuestionR_Questions foreign key(idQuestions)
		references actar.tb_questions(idQuestions)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
