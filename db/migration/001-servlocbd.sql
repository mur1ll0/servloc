--
-- Database: `servlocbd`
--
CREATE DATABASE IF NOT EXISTS `servlocbd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `servlocbd`;

CREATE TABLE servico(
	codigo BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
	titulo varchar(64) NOT NULL,
	descricao varchar(200),
	estado varchar (20),
	cidade varchar (40)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;