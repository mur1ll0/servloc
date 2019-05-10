--
-- Database: `servlocbd`
--
CREATE DATABASE IF NOT EXISTS `servlocbd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `servlocbd`;

CREATE TABLE servicos (
	codigo bigint(20) PRIMARY KEY AUTO_INCREMENT,
	titulo varchar(64) NOT NULL,
	descricao varchar(200),
	estado varchar(2) NOT NULL,
	cidade varchar(40),
	ativo int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE pessoas(
	codigo BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
	nome varchar(64) NOT NULL,
	rg varchar(7),
	cpf varchar (11),
	telefone varchar (20) NOT NULL,
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
