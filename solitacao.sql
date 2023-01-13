CREATE DATABASE solicitacoes_ti;

CREATE TABLE `solicitacao_ti`.`solicitacoes` ( `Id` INT NOT NULL AUTO_INCREMENT , `assunto` VARCHAR(50) NOT NULL , `descricao` VARCHAR(250) NOT NULL , `nome` VARCHAR(30) NOT NULL , `email` VARCHAR(40) NOT NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;