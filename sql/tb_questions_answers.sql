create table actar.tb_questions_answers (

  /*
    Tabela para Relacao entre Questions e Respostas


  */

	idQuestions_answers int unique auto_increment not null,
  idSurvey int not null,
  idFuncionario int not null,
  idQuestions int not null,
  idDepartamento int not null,
  idVendor int not null,
  answerFuncionario int not null,
  constraint PK_QuestionsAnswers primary key(idQuestions_answers),
  constraint PK_QuestionsAnswers_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsAnswers_Funcionarios foreign key(idFuncionario)
    references actar.tb_funcionarios(idFuncionario),
  constraint PK_QuestionsAnswers_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsAnswers_Vendors foreign key(idVendor)
    references actar.tb_vendors(idVendor)
) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
