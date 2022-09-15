DROP DATABASE IF EXISTS kellyscollars;

CREATE DATABASE kellyscollars
	DEFAULT CHARACTER SET utf8
	DEFAULT COLLATE utf8_general_ci;

CREATE TABLE kellyscollars.products (
	id INT NOT NULL AUTO_INCREMENT IDENTITY,
	name CHAR(200) NOT NULL,
	price NUMERIC(7,2) NOT NULL,
	description VARCHAR(5000),
	image_file_name CHAR(200)
) ENGINE = InnoDB;

CREATE TABLE kellyscollars.user_ (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name_ CHAR(50) NOT NULL,
	password CHAR(25) NOT NULL
) ENGINE = InnoDB;

INSERT INTO kellyscollars.products VALUES(NULL, 'Spiky', 20.00, 'Lots of tough looking spikes', 'collar1.jpg');
INSERT INTO kellyscollars.products VALUES(NULL, 'Abigail', 15.00, 'A rainbow of colours for your pretty pouch.', 'collar2.jpg');
INSERT INTO kellyscollars.products VALUES(NULL, 'Zombies', 20.00, 'The perfect collar for your undead dog!', 'collar3.jpg');
INSERT INTO kellyscollars.products VALUES(NULL, 'Martingale', 25.00, 'A fancy collar for your fancy greyhound.', 'collar4.jpg');
INSERT INTO kellyscollars.products VALUES(NULL, 'Chloe', 28.00, 'Available with custom embroidery so everyone all know the name of your best friend.', 'collar5.jpg');
INSERT INTO kellyscollars.products VALUES(NULL, 'Seeing Spots', 16.00, 'Available in many cotton prints.', 'collar6.jpg');
INSERT INTO kellyscollars.products VALUES(NULL, 'Zombie Hunter', 20.00, 'Keep those zombies at bay!', 'collar7.jpg');
INSERT INTO kellyscollars.products VALUES(NULL, 'Simple Spikes', 20.00, 'A very macho collar for a very macho dog.', 'collar8.jpg');

INSERT INTO kellyscollars.user_ VALUES (NULL, 'ddvorski', 'red');
INSERT INTO kellyscollars.user_ VALUES (NULL, 'paylesworth', 'blue');
