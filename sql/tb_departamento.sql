create table actar.tb_departamento (

  /*
    Tabela para o Cadastro das Areas Internas.
    Exemplo:
      -> Pre-Vendas
      -> Delivery
      -> Suporte
  */

	idDepartamento int auto_increment not null,
  nomeDepartamento varchar(256) not null,
  constraint PK_Departamento primary key(idDepartamento)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
