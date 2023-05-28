-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema emc_mobile
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema emc_mobile
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `emc_mobile` DEFAULT CHARACTER SET utf8 ;
USE `emc_mobile` ;

-- -----------------------------------------------------
-- Table `emc_mobile`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `emc_mobile`.`admin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(4100) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emc_mobile`.`branch`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `emc_mobile`.`branch` (
  `id` INT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emc_mobile`.`mobile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `emc_mobile`.`mobile` (
  `id` INT NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  `branch_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `brand` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_mobile_branch_idx` (`branch_id` ASC) VISIBLE,
  CONSTRAINT `fk_mobile_branch`
    FOREIGN KEY (`branch_id`)
    REFERENCES `emc_mobile`.`branch` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emc_mobile`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `emc_mobile`.`customer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
