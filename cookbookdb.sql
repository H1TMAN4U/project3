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
-- -----------------------------------------------------
-- Schema cookbook
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cookbook
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cookbook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `cookbook` ;

-- -----------------------------------------------------
-- Table `mydb`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cookbook`.`category` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));

USE `cookbook` ;

-- -----------------------------------------------------
-- Table `cookbook`.`ingredient_group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cookbook`.`ingredient_group` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `main_group` VARCHAR(45) NOT NULL,
  `sub_group` VARCHAR(45),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cookbook`.`ingredients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cookbook`.`ingredients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `ingredient_group_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ingredients_ingredient_group1_idx` (`ingredient_group_id` ASC) VISIBLE,
  CONSTRAINT `fk_ingredients_ingredient_group1`
    FOREIGN KEY (`ingredient_group_id`)
    REFERENCES `cookbook`.`ingredient_group` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `cookbook`.`measure`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cookbook`.`measure` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `cookbook`.`recipes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cookbook`.`recipes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(25) NOT NULL,
  `description` VARCHAR(50) NOT NULL,
  `instructions` VARCHAR(500) NOT NULL,
  `img` VARCHAR(255) NOT NULL,
  `category_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_recipes_category1_idx` (`category_id` ASC) VISIBLE,
  CONSTRAINT `fk_recipes_category1`
    FOREIGN KEY (`category_id`)
    REFERENCES `mydb`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `cookbook`.`recipe_ingredients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cookbook`.`recipe_ingredients` (
  `amount` INT NOT NULL,
  `recipe_id` INT NOT NULL,
  `ingredient_id` INT NOT NULL,
  `measure_id` INT NOT NULL,
  INDEX `fk_recipe` (`recipe_id` ASC) VISIBLE,
  INDEX `fk_ingredient` (`ingredient_id` ASC) VISIBLE,
  INDEX `fk_measure` (`measure_id` ASC) VISIBLE,
  CONSTRAINT `fk_ingredient`
    FOREIGN KEY (`ingredient_id`)
    REFERENCES `cookbook`.`ingredients` (`id`),
  CONSTRAINT `fk_measure`
    FOREIGN KEY (`measure_id`)
    REFERENCES `cookbook`.`measure` (`id`),
  CONSTRAINT `fk_recipe`
    FOREIGN KEY (`recipe_id`)
    REFERENCES `cookbook`.`recipes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
