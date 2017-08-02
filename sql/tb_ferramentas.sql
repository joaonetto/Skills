create table actar.tb_ferramentas (

	idFerramenta int unique auto_increment not null,
  nomeFerramenta varchar(256) not null,
  constraint PK_Ferramenta primary key(idFerramenta)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
