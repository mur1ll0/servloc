CREATE TABLE servicos (
	codigo bigint(20) PRIMARY KEY AUTO_INCREMENT,
	titulo varchar(64) NOT NULL,
	descricao varchar(200) DEFAULT NULL,
	uf varchar(2) DEFAULT NULL,
	cidade varchar(40) DEFAULT NULL,
	ativo int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE categorias (
	codigo bigint(20) PRIMARY KEY AUTO_INCREMENT,
	nome varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE servicos_categorias (
	codigo bigint(20) PRIMARY KEY AUTO_INCREMENT,
	servico bigint(20),
	categoria bigint(20),
	FOREIGN KEY (servico) REFERENCES servicos (codigo),
	FOREIGN KEY (categoria) REFERENCES categorias (codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8