create table actar.tb_funcionarios (

  /*
    Tabela para o Cadastro dos Funcionarios.

    Auxilio sheets:
    ="insert into " & Tabelas!$B$1 & " values ( null, '" & tb_funcionarios!B2 & "', '" & tb_funcionarios!C2 & "');"
  */

	idFuncionario int unique auto_increment not null,
  nomeFuncionario varchar(256) not null,
  emailFuncionario varchar(256) not null,
	analiseFuncionario tinyint(1) not null,
  constraint PK_Funcionario primary key(idFuncionario)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
