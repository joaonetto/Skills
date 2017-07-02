create table actar.tb_questions_departamentos (

  /*
    Tabela para Relacao entre Questions e Tech.


  */

	idQuestions_departamentos int unique auto_increment not null,
  idSurvey int not null,
  idQuestions int not null,
  idDepartamento int not null,
  constraint PK_QuestionsDepartamentos primary key(idQuestions_departamentos),
  constraint PK_QuestionsDepartamentos_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_QuestionsDepartamentos_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_QuestionsDepartamentos_Departamento foreign key(idDepartamento)
    references actar.tb_departamentos(idDepartamento)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
