CREATE TABLE servicos_pessoas (
	codigo bigint(20) PRIMARY KEY AUTO_INCREMENT,
	servico bigint(20),
	pessoa bigint(20),
	datahora datetime,
	FOREIGN KEY (servico) REFERENCES servicos (codigo),
	FOREIGN KEY (pessoa) REFERENCES pessoas (codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;