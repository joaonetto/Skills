create table actar.tb_tech (

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

	idTech int unique auto_increment not null,
  nomeTech varchar(256) not null,
  constraint PK_Tech primary key(idTech)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
