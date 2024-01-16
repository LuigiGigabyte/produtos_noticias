-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para internit_db
CREATE DATABASE IF NOT EXISTS `internit_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `internit_db`;

-- Copiando estrutura para tabela internit_db.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `nome` char(50) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela internit_db.categoria: ~5 rows (aproximadamente)
INSERT INTO `categoria` (`nome`, `cod`) VALUES
	('Eletrodoméstico', 1),
	('Eletrônico', 2),
	('Brinquedo', 3),
	('Alimento', 4),
	('Móvel', 5);

-- Copiando estrutura para tabela internit_db.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `titulo` varchar(50) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `resumo` char(50) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela internit_db.noticias: ~4 rows (aproximadamente)
INSERT INTO `noticias` (`titulo`, `imagem`, `resumo`, `data`) VALUES
	('Noticia 1\r\n', 'https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png', 'Lorem Ipsum', '2023-01-16'),
	('Noticia 2', 'https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png', 'ASDsasada', '2022-01-16'),
	('Noticia 3', 'https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png', 'ASasdsadsad', '2024-01-16'),
	('Noticia 4', 'https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png', 'asdasdadasdasdsa', '2021-01-16');

-- Copiando estrutura para tabela internit_db.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `nome` char(50) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `imagem` varchar(500) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `FK_produtos_categoria` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela internit_db.produtos: ~6 rows (aproximadamente)
INSERT INTO `produtos` (`nome`, `status`, `quantidade`, `descricao`, `imagem`, `valor`, `categoria`, `cod`) VALUES
	('Celular', 'ativo', 15, 'aparelho celular', 'https://m.media-amazon.com/images/I/516V8EJ44HL._AC_.jpg', 5, 2, 13),
	('Notebook', 'inativo', 5, 'Um notebook comum', 'https://m.media-amazon.com/images/I/516V8EJ44HL._AC_.jpg', 5000, 2, 17),
	('Superheroi lego', 'ativo', 13, 'Um brinquedo de lego', 'sdasdas', 15, 3, 18),
	('Espada', 'inativo', 300, 'Um notebook comum', 'lll', 50, 3, 25),
	('Cadeira', 'inativo', 0, 'Uma cadeira movel', 'zz', 50, 4, 26),
	('Produto Teste', 'ativo', 50, 'um produto teste', 'z', 500, 1, 27);

-- Copiando estrutura para tabela internit_db.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela internit_db.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(6, 'luigi enrico', 'luigibongiolo@gmail.com', '$2y$10$pvTmUF9zbumCXGm00.LuFecNpAx1Iyo7spB3UZ4Sv4tvEfOfIfdmC'),
	(7, 'admin', 'admin@gmail.com', '$2y$10$pvTmUF9zbumCXGm00.LuFecNpAx1Iyo7spB3UZ4Sv4tvEfOfIfdmC');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
