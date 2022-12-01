CREATE SCHEMA `cookbook`;
USE `cookbook` ;

CREATE TABLE IF NOT EXISTS `cookbook`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `cookbook`.`ingredient_group` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `main_group` VARCHAR(45) NOT NULL,
  `sub_group` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `cookbook`.`ingredients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `ingredient_group_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`ingredient_group_id`)
  REFERENCES `cookbook`.`ingredient_group` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `cookbook`.`measure` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `cookbook`.`recipes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `instructions` VARCHAR(1000) NOT NULL,
  `img` VARCHAR(255) NULL,
  `category_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`category_id`)
  REFERENCES `cookbook`.`category` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `cookbook`.`recipe_ingredients` (
  `amount` INT NOT NULL,
  `recipe_id` INT NOT NULL,
  `ingredient_id` INT NOT NULL,
  `measure_id` INT NOT NULL,
    FOREIGN KEY (`ingredient_id`)
    REFERENCES `cookbook`.`ingredients` (`id`),
    FOREIGN KEY (`measure_id`)
    REFERENCES `cookbook`.`measure` (`id`),
    FOREIGN KEY (`recipe_id`)
    REFERENCES `cookbook`.`recipes` (`id`));

START TRANSACTION;
USE `cookbook`;
INSERT INTO `cookbook`.`category` (`id`, `name`) VALUES (1, 'food');
COMMIT;

START TRANSACTION;
USE `cookbook`;
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (1, '1g', '');
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (2, '2g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (3, '3g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (4, '4g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (5, '5g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (6, '6g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (7, '7g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (8, '8g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (9, '9g', NULL);
INSERT INTO `cookbook`.`ingredient_group` (`id`, `main_group`, `sub_group`) VALUES (10, '10g', NULL);
COMMIT;

START TRANSACTION;
USE `cookbook`;
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (1, 'olive oil', 1);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (2, 'onion', 2);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (3, 'garlic cloves', 3);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (4, 'chorizo', 4);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (5, 'tomatoes', 5);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (6, 'caster sugar', 6);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (7, 'fresh gnocchi', 7);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (8, 'mozzarella ball', 8);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (9, 'bunch of basil', 9);
INSERT INTO `cookbook`.`ingredients` (`id`, `name`, `ingredient_group_id`) VALUES (10, 'green salad', 10);
COMMIT;

START TRANSACTION;
USE `cookbook`;
INSERT INTO `cookbook`.`measure` (`id`, `name`) VALUES (1, 'tablespoon/s');
COMMIT;

START TRANSACTION;
USE `cookbook`;
INSERT INTO `cookbook`.`recipes` (`id`, `name`, `description`, `instructions`, `img`, `category_id`) VALUES (1, 'chorizo & mozzarella gnocchi bake', 'Upgrade cheesy tomato pasta with gnocchi, chorizo and mozzarella for a comforting bake that makes an excellent midweek meal', 'STEP 1 Heat the oil in a medium pan over a medium heat. Fry the onion and garlic for 8-10 mins until soft. Add the chorizo and fry for 5 mins more. Tip in the tomatoes and sugar, and season. Bring to a simmer, then add the gnocchi and cook for 8 mins, stirring often, until soft. Heat the grill to high. STEP 2 Stir ¾ of the mozzarella and most of the basil through the gnocchi. Divide the mixture between six ovenproof ramekins, or put in one baking dish. Top with the remaining mozzarella, then grill for 3 mins, or until the cheese is melted and golden. Season, scatter over the remaining basil and serve with green salad.', NULL, 1);
COMMIT;

START TRANSACTION;
USE `cookbook`;
INSERT INTO `cookbook`.`recipe_ingredients` (`amount`, `recipe_id`, `ingredient_id`, `measure_id`) VALUES (1, 1, 1, 1);
COMMIT;

