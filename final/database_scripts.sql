create database booksforall;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (id, username, role, password, created_date) VALUES
(1, 'admin', 'admin', 'admin', '2020-03-03 12:39:00'),
(2, 'publisher', 'publisher', 'publisher', '2020-03-03 12:39:00'),
(3, 'customer', 'customer', 'customer', '2020-03-03 12:39:00');


CREATE TABLE products (
id int(11) NOT NULL,
name varchar(255) NOT NULL,
description text NOT NULL,
price varchar(255) NOT NULL,
created datetime NOT NULL,
modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) CHARACTER SET utf8;

INSERT INTO products (`id`, `name`, `description`, `price`, `created`, `modified`) (VALUES)
(1 , 'Keepers of Grimoire: Rise of the Keepers', 'by Brian Shukwit. Genre: Fantasy', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(2 , 'Legend of Zelda: Hyrule Historia', 'Lore pertaining to the video game series, Legend of Zelda. Genre: Fantasy','20.00','2020-02-28 10:49:40','2020-02-28 10:49:40'),
(3 , 'Chronicles of Narnia', 'by C.S.Lewis. Contains all seven books in total. Genre: Fantasy','30.00 ','2020-02-28 10:49:40','2020-02-28 10:49:40'),
(4 , 'Fall of Gondolin','by J.R.R. Toilkien. Genre: Fantasy','10.00','2020-02-28 10:49:40','2020-02-28 10:49:40'),
(5 , 'Martin The Warrior','by Brian Jacques. Genre: Fantasy ','10.00','2020-02-28 10:49:40','2020-02-28 10:49:40'),
(6 , 'Mistborn','by Brandon Sanderson. Genre: Fantasy','10.00','2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(7 , 'the Opal Mystery','by Stella Fabian.','10.00' , '2020-02-28 10:49:40','2020-02-28 10:49:40'),
(8 , 'the Long Patrol','by Brian Jacques. Genre: Fantasy','10.00','2020-02-28 10:49:40','2020-02-28 10:49:40'),
(9 , 'the Legend of Luke','by Brian Jacques. Genre: Fantasy','10.00','2020-02-28 10:49:40' , '2020-02-28 10:49:40'),
(10 , 'Master Plots' ,'by Ronald B. Tobius. Genre: Non-Fiction','10.00','2020-02-28 10:49:40' , '2020-02-28 10:49:40')

CREATE TABLE product_images (
id int(11) NOT NULL AUTO_INCREMENT,
product_id INT(11) NOT NULL,
name varchar(255) NOT NULL,
created datetime NOT NULL,
modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) CHARACTER SET utf8;

INSERT INTO `product_images` (`id`,`product_id`,`name`,`created`,`modified`) VALUES
(1,1, 'keepers_of_grimoire.jpg', '2020-03-01 12:39:39','2020-03-01 12:39:39'),
(2,2, 'zelda.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(3,3, 'narnia.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(4,4, 'gondolin.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(5,5, 'lefthand.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(6,6, 'righthand.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(7,7, 'opal_mystery.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(8,8, 'long_patrol.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(9,9, 'legend_of_luke.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39'),
(10,10, 'master_plots.jpg','2020-03-01 12:39:39','2020-03-01 12:39:39');

CREATE TABLE cart_items (
id INT(11) NOT NULL AUTO_INCREMENT,
product_id int(11) NOT NULL,
quantity DOUBLE NOT NULL,
user_id int(11) NOT NULL,
created datetime NOT NULL,
modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) CHARACTER SET utf8;

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`, `modified`) VALUES
(1, 'Keepers of Grimoire: Rise of the Keepers', 'by Brian Shukwit. Genre: Fantasy', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(2, 'Legend of Zelda: Hyrule Historia', 'Lore pertaining to the video game series, Legend of Zelda. Genre: Fantasy', '20.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(3, 'Chronicles of Narnia', 'by C.S.Lewis. Contains all seven books in total. Genre: Fantasy', '30.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(4, 'Fall of Gondolin', 'by J.R.R. Toilkien. Genre: Fantasy', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(5, 'Martin The Warrior', 'by Brian Jacques. Genre: Fantasy', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(6, 'Mistborn', 'by Brandon Sanderson. Genre: Fantasy', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(7, 'the Opal Mystery', 'by Stella Fabian.', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(8, 'the Long Patrol', 'by Brian Jacques. Genre: Fantasy', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(9, 'the Legend of Luke', 'by Brian Jacques. Genre: Fantasy', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40'),
(10, 'Master Plots', 'by Ronald B. Tobius. Genre: Non-Fiction', '10.00', '2020-02-28 10:49:40', '2020-02-28 10:49:40')


