create table actar.tb_survey (

  /*
    Tabela para o Cadastro dos Suverys.
    Não é necessario neste momento criar o relacionamento da pergunta

    Sem Relacao Externa
  */

	idSurvey int unique auto_increment not null,
  dtSurvey date not null,
  constraint PK_Survey primary key(idSurvey)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
