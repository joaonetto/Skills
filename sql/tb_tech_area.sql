create table actar.tb_tech_area (

	idTech_Area int unique auto_increment not null,
  nomeTech_Area varchar(256) not null,
  constraint PK_TechArea primary key(idTech_Area)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
