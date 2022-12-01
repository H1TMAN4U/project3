use cookbook;
<<<<<<< HEAD
-- INSERT INTO category (name) VALUE('food');
-- INSERT INTO `group` VALUE('chicken', 'duck', 'pig', 'cow');
-- INSERT INTO `group` VALUE('chicken', 'duck', 'pig', 'cow');
-- INSERT INTO `group` VALUE('chicken', 'duck', 'pig', 'cow');
-- INSERT INTO Recipe (name, description, instructions, img, category_id) VALUES('Boiled Egg', 'A single boiled egg', 'Add egg to cold water. Bring water to boil. Cook.','https://www.seriouseats.com/thmb/T5v_t4ZE06pasVLee8VYwkoG9Ec=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/perfect-soft-boiled-eggs-hero-05_1-7680c13e853046fd90db9e277911e4e8.JPG',1);

-- INSERT INTO Recipe (name, description, instructions, img, category_id) VALUES('Chocolate Cake', 'Yummy cake', 'Add eggs, flour, chocolate to pan. Bake at 350 for 1 hour','https://food-images.files.bbci.co.uk/food/recipes/easy_chocolate_cake_31070_16x9.jpg',1);

-- INSERT INTO measure (name) VALUES('CUP'), ('TEASPOON'), ('TABLESPOON');

-- INSERT INTO Ingredient (name, `ingredient_group_id`) VALUES('egg', 'chicken'), ('salt', 'sea salt'), ('sugar', 'White sugar.'), ('chocolate', 'milk chocolate'), ('vanilla extract', 'extract'), ('flour'), ;


-- INSERT INTO RecipeIngredient (recipe_id, ingredient_id, measure_id, amount) VALUES (1, 1, NULL, 1);

-- INSERT INTO RecipeIngredient (recipe_id, ingredient_id, measure_id, amount)  VALUES (2, 1, NULL, 3);

-- INSERT INTO RecipeIngredient (recipe_id, ingredient_id, measure_id, amount)  VALUES (2, 2, 2, 1);

-- INSERT INTO RecipeIngredient (recipe_id, ingredient_id, measure_id, amount)  VALUES (2, 3, 1, 2);

-- INSERT INTO RecipeIngredient (recipe_id, ingredient_id, measure_id, amount)  VALUES (2, 4, 1, 1);


-- INSERT INTO `group` VALUE('chicken'),('cow'),('pig'),('salt'),('sugar'),('flour'),('milk'),('extract'),('chocolate'),('turkey'),('duck'),('chicken');


-- -- form name, select ingr.grup 
-- INSERT INTO Ingredient (name, `ingredient_group_id`) VALUES('egg', 'chicken');
=======

>>>>>>> 8999cdecdee9e5823c4704cec086b9472ca7a2a9
INSERT INTO `cookbook`.`ingredient_group`
(`main_group`,`sub_group`)
VALUES
("Meat","Chicken"),("Meat","Pig"),("Meat","Beef"),("Meat","Duck"),("Meat","Ostrich"),("Meat","Turkey"),("Meat","Beef jerky"),("Meat","Lamb"),("Meat","Hare"),("Meat","Goat"),("Meat","Pheasant"),("Meat","Bison"),("Meat","Venison"),

("Seafood","Saltwater Fish"),("Seafood","Freshwater Fish "),("Seafood","Shellfish"),("Seafood","Mollusks"),("Seafood","Crustaceans"),("Seafood","Cephalopods"),("Seafood","Roe"),("Seafood","Echinoderms"),

("Fruits","apples"),("Fruits","pears"),("Fruits","citrus"),("Fruits","stone fruit"),("Fruits","tropical and exotic"),("Fruits","berries"),("Fruits","melons"),("Fruits","tomatoes"),("Fruits","avocados."),

("Dairy","Milk"),("Dairy","Cream"),("Dairy","Butter"),("Dairy","Fermented"),("Dairy","Yogurt"),("Dairy","Cheese"),("Dairy","Custard"),("Dairy","Frozen"),

("Grains", "Wheat"),("Grains", "Rice"),("Grains", "Barley"),("Grains", "Oats"),("Grains", "Quinoa"),("Grains", "Rye"),

("Eggs",null),

("Fungi","Mushroom"),

("Seasonings and Spices","Saline seasonings"), ("Seasonings and Spices","Acid seasonings"),("Seasonings and Spices","Hot seasonings"),("Seasonings and Spices","Spice seasonings"),("Seasonings and Spices","Herbs"),

("Condiments","The pungents"),("Condiments","Hot condiments"),("Condiments","Fatty substances"),

("Oil",null),

("Confectionery","Sugar candies"),("Confectionery","Chocolates"),("Confectionery","Candied fruits"),("Confectionery","Nuts"),("Confectionery","chewing gum"),("Confectionery","Ice cream"),

("Vegetables",null),

("beverages","Non-alcoholic"),("beverages","Alcoholic");

select * from ingredient_group;
INSERT INTO `cookbook`.`ingredients`
(`ingredient_group_id`,`name`)
VALUES
 ("62","Artichoke"),("62","Asparagus"),("62","Aubergene (eggplant)"),("62","Avocado"),("62","Beet"),("62","Bok Choy"),("62","Broccoli"),("62","Broccolini"),("62","Broccoli Raab"),("62","Brussels Sprouts"),("62","Chinese Cabbage"),
 ("62","Green Cabbage"),("62","Purple Cabbage"),("62","Savoy Cabbage"),("62","Carrot"),("62","Cauliflower"),("62","Celeriac"),("62","Celery"),("62","Chard (Red and Swiss)"),
 ("62","Chicory"),("62","Corn"),("62","Cress"),("62","Cucumbers"),("62","Daikon"),("62","Garlic"),("62","Green Beans"),("62","Greens"),("62","Collard Greens"),("62","Mustard Greens"),
 ("62","Gourds"),("62","Jicama"),("62","Kale"),("62","Kohlrabi"),("62","Leeks"),("62","Arugula Lettuce"),("62","Butter Lettuce"),("62","Endive Lettuce"),("62","Green and Red Leaf Lettuce"),("62","Romaine Lettuce"),
 ("62","Lima Beans"),("62","Mushrooms"),("62","Okra"),("62","Onions"),("62","Green Onions"),("62","Parsnips"),("62","Peas"),("62","Snap Sugar Peas"),("62","Snow Peas"),
 ("62","Anaheim Peppers"),("62","Sweet peppers"),("62","Potatoes"),("62","Pumpkin"),("62","Radicchio"),("62","Radish"),("62","Rhubarb"),("62","Romanesco (cauliflower)"),("62","Rutabaga"),
 ("62","Shallots"),("62","Spinach"),("62","Squash"),("62","Acorn Squash"),("62","Butternut Squash"),("62","Patti Pan Squash"),("62","Spaghetti Squash"),("62","Swede"),("62","Sweet Potato"),("62","Tomatillo"),
 ("62","Tomatoes"),("62","Turnips"),("62","Water Chestnuts"),("62","yam"),("62","Gourds");


INSERT INTO `cookbook`.`ingredients`
(`ingredient_group_id`,`name`)
VALUES
("1","Whole Chicken"), ("1","Chicken breast"). ("1","Breast Fillet"), ("1","Chicken Leg"), ("1","Chicken Thigh Fillet"), ("1","Chicken Drumstick"). ("1","Chicken Wings"), ("1","Chicken Neck and Back"),
("2","Hocks"),("2","Leg or Ham"),("2","Pork Belly"),("2","Spareribs"),("2","Pork Shoulder"),("2","Picnic Ham"),("2","Chop"),("2","Loin"),("2","Sirloin"),("2","Baby Back Ribs"),
("3","Chuck"),("3","Brisket"),("3","Rib"),("3","Plate (belly)"),("3","Loin"),("3","Flank (abdomen)"),("3","Round (back end)").("3","Shank (thigh)")
("4","Head"),("4","Neck"),("4","Back"),("4","Wing"),("4","Breast"),("4","Tip"),("4","Tail"),("4","Thigh"),("4","Drumstick"),("4","Tenderloin"),
("5","Back Tender"),("5","Outside Strip"),("5","Inside Strip"),("5","Outside Thigh"),("5","Oyster"),("5","Inside Leg"),("5","Outside Leg"),("5","Pearl (inner cut)"),("5","Tip"),("5","Top Strip"),
("6","Neck"),("6","Breasts"),("6","Tenderloin"),("6","Back"),("6","Wing"),("6","Leg"),("6","Tail"),
("7","Chuck"),("7","Brisket"),("7","Rib"),("7","Plate"),("7","Shank"),("7","Short Loin"),("7","Sirloin"),("7","Round"),("7","Flank"),
("8","Neck"),("8","Shoulder"),("8","Rib"),("8","Loin"),("8","Kidney"),("8","Leg"),
("9","Loin"),("9","Saddle"),("9","Shoulder"),("9","Front Leg"),("9","Rib"),("9","Hind Leg"),("9","Shank"),
("10","Neck"),("10","Shoulder"),("10","Rib"),("10","Loin"),("10","Leg"),("10","Hindshank"),("10","Flank"),("10","Breast"),("10","Foreshank"),
("11","Whole"), ("11","Breast"). ("11","Fillet"), ("11","Leg"), ("11","Thigh Fillet"), ("11","Drumstick"), ("11","Wings"), ("11","Neck"), ("11","Back"),
("12","Neck"),("12","Shoulder"),("12","Rib"),("12","Loin"),("12","Leg"),("12","Hindshank"),("12","Flank"),("12","Breast"),("12","Foreshank"),
("15","Neck"),("15","Shoulder"),("15","Flank"),("15","Tenderloin"),("15","Loin"),("15","Rump"),("15","Leg"),("15","Shank"),
-- Seafood
("14","Whole"),("14","Loin"),("14","Fillet"),("14","Butterfly Fillet"),("14","Steaks"),("14","Tail")
("15","Whole"),("15","Loin"),("15","Fillet"),("15","Butterfly Fillet"),("15","Steaks"),("15","Tail")
("16","pink shrimp"),("16","white shrimp"),("16","brown shrimp"),("16","red shrimp"),
("16","Blue crabs"),("16","Dungeness crabs"),("16","Horseshoe crabs"),("16","King crabs"),("16","Peekytoe crabs"),("16","Rock Crab"),
("16","lobster"),
("16","squid"),
("16","oysters"),("16","scallops"),
("16","snails"),
("16"," King prawns")
("16"," Tiger prawns"),
("16","Banana prawns"),
("16","School prawns"),









-- Shimp lobster crab  oister prawns  Neritidae Scallop mussels
-- in sea food  roe  is a thing as well

