CREATE DATABASE `aula_php`;
USE `aula_php`;

CREATE TABLE `aluno` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `idade` int DEFAULT NULL,
  PRIMARY KEY (`id`));



