create table actar.tb_questionsv (

  /*
    Tabela para o Cadastro das Questoes Tecnicas.
    A relacao entre esta tabela deve seguir que:
    -> Deverá associar a pergunta a tabela: tb_vendor;
    -> Deverá associar a qual produto a pergunta é referenciada na tabela: tb_produto
    -> Deverá associar se de qual departamento é a pergunta na tabela: tb_departamento
  */

	idQuestionsV int auto_increment not null,
  idVendor int not null,
  idTech int not null,
  idDepartamento int not null,
  desQuestao varchar(256) not null,
  constraint PK_Question primary key(idQuestionsV),
  constraint PK_Question_Vendor foreign key(idVendor)
		references actar.tb_vendor(idVendor),
  constraint PK_Question_Tech foreign key(idTech)
  	references actar.tb_tech(idTech),
  constraint PK_Question_Departamento foreign key(idDepartamento)
  	references actar.tb_departamento(idDepartamento)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
