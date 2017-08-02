create table actar.tb_questions_ferramentas_answers (

	idQuestionsFerramentasAnswers int unique auto_increment not null,
  idSurvey int not null,
  idFuncionario int not null,
  idQuestions int not null,
  idFerramenta int not null,
  answerFuncFerramenta int not null,
  constraint PK_QuestionsFerramentasAnswers primary key(idQuestionsFerramentasAnswers),
  constraint PK_QuestionsFerramentasAnswers_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsFerramentasAnswers_Funcionarios foreign key(idFuncionario)
    references actar.tb_funcionarios(idFuncionario),
  constraint PK_QuestionsFerramentasAnswers_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsFerramentasAnswers_Ferramenta foreign key(idFerramenta)
    references actar.tb_ferramentas(idFerramenta)
) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
