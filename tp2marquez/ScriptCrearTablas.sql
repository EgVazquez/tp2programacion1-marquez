-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Libreria
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Libreria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Libreria` DEFAULT CHARACTER SET utf8 ;
USE `Libreria` ;

-- -----------------------------------------------------
-- Table `Libreria`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Libreria`.`usuarios` (
  `idusuarios` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreusuario` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB
ROW_FORMAT = DYNAMIC;


-- -----------------------------------------------------
-- Table `Libreria`.`libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Libreria`.`libros` (
  `ISBN` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `usuarioalquila` INT(11) NULL,
  PRIMARY KEY (`ISBN`),
  INDEX `fk_libros_usuarios_idx` (`usuarioalquila`),
  CONSTRAINT `fk_libros_usuarios`
    FOREIGN KEY (`usuarioalquila`)
    REFERENCES `Libreria`.`usuarios` (`idusuarios`)
)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
