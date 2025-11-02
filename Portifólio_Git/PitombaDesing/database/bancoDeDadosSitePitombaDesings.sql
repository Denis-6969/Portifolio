-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para dbpitombadesings
-- CREATE DATABASE IF NOT EXISTS `dbpitombadesings` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
-- USE `dbpitombadesings`;

-- Copiando estrutura para tabela dbpitombadesings.tbpostagem
CREATE TABLE IF NOT EXISTS `tbpostagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomePost` char(100) DEFAULT NULL,
  `imgPost` blob DEFAULT NULL,
  `descPost` varchar(500) DEFAULT NULL,
  `dataPost` date DEFAULT NULL,
  `criadorPost` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='tabela que irá armazenar as imagens e post no banco de dados';

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela dbpitombadesings.tbusuarios
CREATE TABLE IF NOT EXISTS `tbusuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` char(60) DEFAULT NULL,
  `emailUsuario` char(100) DEFAULT NULL,
  `senhaUsuario` char(100) DEFAULT NULL,
  `tipoUsuario` char(10) NOT NULL DEFAULT 'Usuario',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='Tabela para cadastro de usuários';

INSERT INTO `tbusuarios` (`nomeUsuario`, `emailUsuario`, `senhaUsuario`, `tipoUsuario`)
    VALUES ('Admin', 'adm@gmail.com', '$2y$10$bHXxT2nUsaPDriAHeF9NWuK7XhrCgp5NfBub8bcdyjOMG.xj52gaS', 'Admin') ;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
