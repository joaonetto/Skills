create table actar.tb_vendor (

  /*
    Tabela para o Cadastro dos Vendors.
    Onde:
      -> Check Point
      -> Cisco
      -> Juniper
      -> Radware
      -> Symantec
      -> Pulse
      -> Outros

    Não existe relacao Externa

    Auxilio sheets:
    ="insert into " & Tabelas!$B$6 & " values ( null, '" & B2 & "');"

  */

	idVendor int unique auto_increment not null,
  nomeVendor varchar(256) not null,
  constraint PK_Vendor primary key(idVendor)

) engine = InnoDB DEFAULT CHARSET = UTF8 COLLATE = utf8_general_ci;
