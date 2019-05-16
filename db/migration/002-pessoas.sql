CREATE TABLE pessoas(
	codigo BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
	nome varchar(64) NOT NULL,
	rg varchar(7),
	cpf varchar (11),
	telefone varchar (11) NOT NULL,
	email varchar (64) NOT NULL,
	endereco varchar (64),
	bairro varchar (64),
	numero int (8),
	cidade varchar (64) NOT NULL,
	uf varchar (2) NOT NULL,
	usuario varchar (64) NOT NULL,
	senha varchar (64) NOT NULL,
	admin integer (1) NOT NULL,
	fornecedor integer (1) NOT NULL,
	cliente integer (1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;