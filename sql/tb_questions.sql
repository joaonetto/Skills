create table actar.tb_questions (

  /*
    Tabela para o Cadastro das Questoes.
    Não é necessario neste momento criar o relacionamento da pergunta
    com outros itens com Vendor ou Tecnicas/Tecnologias

    Sem Relacao Externa
  */

	idQuestions int auto_increment not null,
  desQuestions varchar(256) not null,
	idVendor int not null,
  constraint PK_Questions primary key(idQuestions)
	constraint PK_Questions_Vendor foreign key(idVendor)
		references actar.tb_vendor(idVendor),
) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
