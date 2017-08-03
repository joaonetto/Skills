create table actar.tb_softskills (

	idSoftSkills int unique auto_increment not null,
  nomeSoftSkills varchar(256) not null,
  constraint PK_SoftSkills primary key(idSoftSkills)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
