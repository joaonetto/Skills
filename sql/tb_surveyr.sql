create table actar.tb_surveyr (

  /*
		===============================
		AINDA NAO SEI SE É NECESSARIO.
		EM ANALISE
		===============================

    Tabela para de Relacao entre:
    -> tb_survey        => idSurvey
    -> tb_funcionarios  => idFuncionario

    Exemplo de Select
    select
      tb_survey.idSurvey,
      tb_funcionarios.idFuncionario,
      tb_funcionarios.nomeFuncionario
    from ((actar.tb_surveyr
      inner join actar.tb_survey on actar.tb_survey.idSurvey = actar.tb_surveyr.idSurvey)
      inner join actar.tb_funcionarios on actar.tb_surveyr.idFuncionario = actar.tb_funcionarios.idFuncionario);
  */

	idSurveyR int unique auto_increment not null,
  idSurvey int not null,
  idFuncionario int not null,
  constraint PK_SurveyR primary key(idSurveyR),
  constraint PK_SurveyR_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_SurveyR_Funcionarios foreign key(idFuncionario)
    references actar.tb_funcionarios(idFuncionario)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
