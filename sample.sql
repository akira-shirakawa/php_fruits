CREATE TABLE php_fruits.fruits (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255),
    color_id INT(11),
    size_id INT(11)
);
CREATE TABLE php_fruits.color (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    color_key VARCHAR(255),
    color_name VARCHAR(255)
);
CREATE TABLE php_fruits.size (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    size_key VARCHAR(255),
    size_name INT(11)
);
