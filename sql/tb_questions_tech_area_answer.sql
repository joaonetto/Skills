create table actar.tb_questions_tech_area_answers (

	idQuestionsTechAreaAnswers int unique auto_increment not null,
  idSurvey int not null,
  idFuncionario int not null,
  idQuestions int not null,
  idTech_Area int not null,
  answerFuncTechArea int not null,
  constraint PK_QuestionsTechAreaAnswers primary key(idQuestionsTechAreaAnswers),
  constraint PK_QuestionsTechAreaAnswers_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsTechAreaAnswers_Funcionarios foreign key(idFuncionario)
    references actar.tb_funcionarios(idFuncionario),
  constraint PK_QuestionsTechAreaAnswers_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsTechAreaAnswers_TechArea foreign key(idTech_Area)
    references actar.tb_tech_area(idTech_Area)
) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
