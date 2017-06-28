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

    A relacao externa se da com Quais Vendors tem as Tecnicas/Tecnologias acima
  */

	idTech int auto_increment not null,
  idVendor int not null,
  nomeTech varchar(256) not null,
  constraint PK_Tech primary key(idTech),
  constraint PK_Tech_Vendor foreign key(idVendor)
		references actar.tb_vendor(idVendor)

) engine = InnoDB;
