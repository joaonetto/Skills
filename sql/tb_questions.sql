create table actar.tb_questions (

  /*
    Tabela para o Cadastro das Questoes.
    Não é necessario neste momento criar o relacionamento da pergunta
    com outros itens com Vendor ou Tecnicas/Tecnologias

    Sem Relacao Externa
  */

	idQuestions int auto_increment not null,
  desQuestions varchar(256) not null,
  constraint PK_Questions primary key(idQuestions)
) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
