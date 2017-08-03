create table actar.tb_questions_softskills_answers (

	idQuestionsSoftSkillsAnswers int unique auto_increment not null,
  idSurvey int not null,
  idFuncionario int not null,
  idQuestions int not null,
  idSoftSkills int not null,
  answerFuncSoftSkills int not null,
  constraint PK_QuestionsSoftSkillsAnswers primary key(idQuestionsSoftSkillsAnswers),
  constraint PK_QuestionsSoftSkillsAnswers_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsSoftSkillsAnswers_Funcionarios foreign key(idFuncionario)
    references actar.tb_funcionarios(idFuncionario),
  constraint PK_QuestionsSoftSkillsAnswers_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsSoftSkillsAnswers_SoftSkills foreign key(idSoftSkills)
    references actar.tb_softskills(idSoftSkills)
) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
