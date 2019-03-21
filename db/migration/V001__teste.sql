CREATE TABLE servico(
	codigo BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
	nome varchar(64) NOT NULL,
	descricao varchar(200),
	contato varchar(64) NOT NULL	
) ENGINE=InnoDB DEFAULT CHARSET=utf8;