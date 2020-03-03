-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para estoque
CREATE DATABASE IF NOT EXISTS `estoque` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `estoque`;

-- Copiando estrutura para tabela estoque.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `data_nascimento` date NOT NULL,
  `inicio_fidelidade` date NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `bairro` varchar(70) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `rua` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque.fornecedores
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `contato` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque.fornecedores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(70) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `estado_produto` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `valor_compra` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `valor_venda` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `imei` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `numero_serie` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque.produtos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque.produtos_vendidos
CREATE TABLE IF NOT EXISTS `produtos_vendidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(70) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `estado_produto` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `valor_compra` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `valor_venda` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `lucro` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `numero_serie` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `imei` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque.produtos_vendidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos_vendidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtos_vendidos` ENABLE KEYS */;

-- Copiando estrutura para tabela estoque.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissao` varchar(70) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela estoque.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `permissao`) VALUES
	(4, 'Teste', 'teste@teste.com', 'teste', 'Admin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
