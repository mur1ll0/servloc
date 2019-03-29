CREATE TABLE pessoas(
	codigo BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
	nome varchar(64) NOT NULL,
	rg varchar(7),
	cpf varchar (11),
	telefone varchar (11),
	email varchar (64),
	endereco varchar (64),
	bairro varchar (64),
	numero int (8),
	cidade varchar (64),
	uf varchar (2),
	usuario varchar (64),
	senha varchar (64),
	admin integer (1),
	fornecedor integer (1),
	cliente integer (1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;