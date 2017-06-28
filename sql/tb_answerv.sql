create table actar.tb_answerv (

  /*
    Tabela para o Cadastro das answer Tecnicas dos Vendors.
    A relacao entre esta tabela deve seguir que:
    -> Deverá associar a resposta a tabela: tb_vendor;
    -> Deverá associar o produto a respossta é referenciada na tabela: tb_produto
    -> Deverá associar qual departamento é a resposta na tabela: tb_departamento
    -> Deverá associar qual pergunta foi feita na tabela: tb_questionv
  */

	idAnswerV int auto_increment not null,
  idVendor int not null,
  idTech int not null,
  idDepartamento int not null,
  idQuestionsV int not null,
  intAnswer int not null,
  constraint PK_Resposta primary key(idAnswerV),
  constraint PK_Resposta_Vendor foreign key(idVendor)
    references actar.tb_vendor(idVendor),
  constraint PK_Resposta_Tech foreign key(idTech)
    references actar.tb_tech(idTech),
  constraint PK_Resposta_Departamento foreign key(idDepartamento)
    references actar.tb_departamento(idDepartamento),
  constraint PK_Resposta_idQuestionsV foreign key(idQuestionsV)
    references actar.tb_questionsv(idQuestionsV)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
