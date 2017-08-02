create table actar.tb_questions_ferramentas (


	idQuestionsFerramentas int unique auto_increment not null,
  idSurvey int not null,
  idQuestions int not null,
  idFerramenta int not null,
  constraint PK_QuestionsFerramentas primary key(idQuestionsFerramentas),
  constraint PK_QuestionsFerramentas_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsFerramentas_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsFerramentas_Ferramenta foreign key(idFerramenta)
    references actar.tb_ferramentas(idFerramenta)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
