-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.20-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.10.0.7000
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para dbreforcoja
CREATE DATABASE IF NOT EXISTS `dbreforcoja` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbreforcoja`;

-- Copiando estrutura para tabela dbreforcoja.tbaula
CREATE TABLE IF NOT EXISTS `tbaula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomePost` char(200) DEFAULT NULL,
  `imgPost` blob,
  `descPost` varchar(500) DEFAULT NULL,
  `dataPost` date DEFAULT NULL,
  `criadorPost` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela dbreforcoja.tbcontato
CREATE TABLE IF NOT EXISTS `tbcontato` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` char(50) DEFAULT NULL,
  `emailUsuario` char(100) DEFAULT NULL,
  `mensagem` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela dbreforcoja.tbperguntas
CREATE TABLE IF NOT EXISTS `tbperguntas` (
  `idPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `situacao` char(20) DEFAULT 'não respondido',
  `materia` char(40) DEFAULT NULL,
  `pergunta` varchar(500) DEFAULT NULL,
  `questionador` char(100) DEFAULT NULL,
  `resposta` varchar(500) DEFAULT 'N/A',
  PRIMARY KEY (`idPergunta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='uma tabela para criação de um local de armazenamento de perguntas';

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela dbreforcoja.tbusuarios
CREATE TABLE IF NOT EXISTS `tbusuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` char(60) DEFAULT NULL,
  `emailUsuario` char(100) DEFAULT NULL,
  `senhaUsuario` varchar(300) DEFAULT NULL,
  `tipoUsuario` char(10) DEFAULT 'aluno',
  `telefone` char(20) DEFAULT NULL,
  `estado` char(50) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabela para o cadastro de alunos e professores';

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
