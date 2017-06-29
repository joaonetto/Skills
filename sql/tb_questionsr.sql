create table actar.tb_questionsr (

	/*
		Tabela para a construcao de relacao das perguntas com:
		-> Deverá associar a pergunta a tabela: tb_vendor;
		-> Deverá associar a qual tecnologia a pergunta é referenciada na tabela: tb_tech
		-> Deverá associar qual departamento cabe a pergunta utilizando a tabela: tb_departamento

    Exemplo Consulta:
    select
      actar.tb_survey.idSurvey,
      actar.tb_questions.nomeQuestions,
      actar.tb_vendors.*,
      actar.tb_departamentos.*,
      actar.tb_tech.*
    from ((((( actar.tb_questionsr
      inner join actar.tb_survey        on actar.tb_survey.idSurvey               = actar.tb_questionsr.idSurvey)
      inner join actar.tb_questions     on actar.tb_questions.idQuestions         = actar.tb_questionsr.idQuestions)
      inner join actar.tb_vendors       on actar.tb_vendors.idVendor              = actar.tb_questionsr.idVendor)
      inner join actar.tb_departamentos on actar.tb_departamentos.idDepartamento  = actar.tb_questionsr.idDepartamento)
      inner join actar.tb_tech          on actar.tb_tech.idTech                   = actar.tb_questionsr.idTech)
      ;

	*/

	idQuestionsR int unique auto_increment not null,
  idSurvey int not null,
  idQuestions int not null,
	idVendor int not null,
	idDepartamento int not null,
  idTech int not null,
	constraint PK_QuestionR primary key(idQuestionsR),
  constraint PK_QuestionR_SurveyR foreign key(idSurvey)
		references actar.tb_survey(idSurvey),
	constraint PK_QuestionR_Questions foreign key(idQuestions)
		references actar.tb_questions(idQuestions),
	constraint PK_QuestionR_Vendors foreign key(idVendor)
		references actar.tb_vendors(idVendor),
	constraint PK_QuestionR_Departamentos foreign key(idDepartamento)
		references actar.tb_departamentos(idDepartamento),
  constraint PK_QuestionR_Tech foreign key(idTech)
  	references actar.tb_tech(idTech)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
