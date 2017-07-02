create table actar.tb_questions_tech (

  /*
    Tabela para Relacao entre Questions e Tech.


  */

	idQuestions_tech int unique auto_increment not null,
  idSurvey int not null,
  idQuestions int not null,
  idTech int not null,
  constraint PK_Questions_Tech primary key(idQuestions_tech),
  constraint PK_Questions_Tech_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_Questions_Tech_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_Questions_Tech_Tech foreign key(idTech)
    references actar.tb_tech(idTech)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
