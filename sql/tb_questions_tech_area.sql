create table actar.tb_questions_tech_area (


	idQuestionsTechArea int unique auto_increment not null,
  idSurvey int not null,
  idQuestions int not null,
  idTech_Area int not null,
  constraint PK_QuestionsTechArea primary key(idQuestionsTechArea),
  constraint PK_QuestionsTechArea_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsTechArea_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsTechArea_TechArea foreign key(idTech_Area)
    references actar.tb_tech_area(idTech_Area)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
