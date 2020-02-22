SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gin_fuzz` DEFAULT CHARACTER SET utf8 ;
USE `gin_fuzz` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gin_fuzz`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(45) NOT NULL,
  `user_password` VARCHAR(20) NOT NULL,
  `user_rank` TINYINT NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `username_UNIQUE` (`user_name` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gin_fuzz`.`article` (
  `article_id` INT NOT NULL AUTO_INCREMENT,
  `article_title` TINYTEXT NOT NULL,
  `article_content` LONGTEXT NOT NULL,
  `article_pic` TINYTEXT NULL,
  `article_timestamp` TIMESTAMP NOT NULL,
  `user_user_id` INT NOT NULL,
  PRIMARY KEY (`article_id`),
  INDEX `fk_article_user1_idx` (`user_user_id` ASC),
  CONSTRAINT `fk_article_user1`
    FOREIGN KEY (`user_user_id`)
    REFERENCES `gin_fuzz`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gin_fuzz`.`comment` (
  `comment_id` INT NOT NULL AUTO_INCREMENT,
  `comment_content` MEDIUMTEXT NOT NULL,
  `comment_timestamp` TIMESTAMP NOT NULL,
  `user_user_id` INT NOT NULL,
  `article_article_id` INT NOT NULL,
  PRIMARY KEY (`comment_id`),
  INDEX `fk_comment_user_idx` (`user_user_id` ASC),
  INDEX `fk_comment_article1_idx` (`article_article_id` ASC),
  CONSTRAINT `fk_comment_user`
    FOREIGN KEY (`user_user_id`)
    REFERENCES `gin_fuzz`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_article1`
    FOREIGN KEY (`article_article_id`)
    REFERENCES `gin_fuzz`.`article` (`article_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- ----------------------------------------------
--  Set first users
-- --------------------------------------------
INSERT INTO user VALUES (NULL, 'Admin', 'nopassword', 1),
                        (NULL, 'Mod', 'nopassword', 2),
                        (NULL, 'User', 'nopassword', 3);
-- ----------------------------------------------
--  Set first article
-- ----------------------------------------------
INSERT INTO article VALUES (NULL, 'Pourquoi la RAT est une pédale incontournable', 'Parce que si c\'est une fuzz au départ, elle peut tout aussi bien remplacer une distorsion soft ou lourde, mais aussi en réglant le filtre au maximum ainsi que le grain très faiblement (pas plus de 2) vous obtiendrez une overdrive à la saturation très prononcée et plaisante', '',1000000000, 1);


-- ----------------------------------------------
--  Set first comments
-- ----------------------------------------------
INSERT INTO comment VALUES (NULL, 'Je confirme, cette pédale est deux fois dans mon pédalboard ! L\'utiliser comme une overdrive est très original et peu courant, et pourtant, elle fait super bien le job.', 1500000, 3, 1),
                        (NULL, 'Pourquoi aurais-je plusieurs fois la même pédale dans mon PB ? Après tout, même si son OD est pas dégueulasse, il existe quand même des OD faites pour ça, et plus paramètrables?', '1600000', 2, 1);

