create table actar.tb_questions_vendors (

  /*
    Tabela para o Cadastro das Tecnologias.
    Exemplo de Tecnologias:
      -> Data Center
      -> Router
      -> Switch
      -> Security
      -> SLB / GSLB
      -> ISP
      -> Outros

    Sem Relacao Externa
  */

	idQuestions_vendors int unique auto_increment not null,
  idSurvey int not null,
  idQuestions int not null,
  idVendor int not null,
  constraint PK_Questions_Vendors primary key(idQuestions_vendors),
  constraint PK_Questions_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey),
  constraint PK_Questions_Vendors_Questions foreign key(idQuestions)
    references actar.tb_questions(idQuestions),
  constraint PK_Questions_Vendors_Vendors foreign key(idVendor)
    references actar.tb_vendors(idVendor)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
