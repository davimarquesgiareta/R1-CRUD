-- MySQL Script generated by MySQL Workbench
-- Fri Mar 26 11:43:26 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`guitarras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`guitarras` (
  `id` INT NOT NULL,
  `marca` VARCHAR(191) NULL,
  `modelo` VARCHAR(191) NULL,
  `ano` VARCHAR(191) NULL,
  `preco` VARCHAR(191) NULL,
  `foto` VARCHAR(191) NULL,
  `cor` VARCHAR(191) NULL,
  `descricao` VARCHAR(191) NULL,
  `created_at` TIMESTAMP(20) NULL,
  `updated_at` TIMESTAMP(20) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
