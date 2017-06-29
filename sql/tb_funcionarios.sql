create table actar.tb_funcionarios (

  /*
    Tabela para o Cadastro dos Funcionarios.
    onde:
      -> ckFuncionarios = boolean (True Active / False Inactive)
    Não existe relação externa

    Auxilio sheets:
    ="insert into " & Tabelas!$B$1 & " values ( null, '" & tb_funcionarios!B2 & "', '" & tb_funcionarios!C2 & "');"
  */

	idFuncionario int auto_increment not null,
  nomeFuncionario varchar(256) not null,
  emailFuncionario varchar(256) not null,
  idSurvey int not null,
  constraint PK_Funcionario primary key(idFuncionario),
  constraint PK_Funcionario_Survey foreign key(idSurvey)
    references actar.tb_survey(idSurvey)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
