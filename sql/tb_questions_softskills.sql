create table actar.tb_questions_softskills (


	idQuestionsSoftSkills int unique auto_increment not null,
  idSurvey int not null,
  idQuestions int not null,
  idSoftSkills int not null,
  constraint PK_QuestionsSoftSkills primary key(idQuestionsSoftSkills),
  constraint PK_QuestionsSoftSkills_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsSoftSkills_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsSoftSkills_SoftSkills foreign key(idSoftSkills)
    references actar.tb_softskills(idSoftSkills)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
