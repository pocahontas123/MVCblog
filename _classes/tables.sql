CREATE DATABASE test;

USE test;

CREATE TABLE authors (
	id INT PRIMARY KEY AUTO_INCREMENT,
	firstname VARCHAR(255) NOT NULL,
	lastname VARCHAR(255) NOT NULL
);

CREATE TABLE categories (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL
);

CREATE TABLE articles (
	id INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	sentence VARCHAR(255) NOT NULL,
	content TEXT NOT NULL,
	date DATETIME DEFAULT NOW(),
	author_id INT NOT NULL,
	category_id INT NOT NULL
);

INSERT INTO categories(name)
VALUES("Informatique"), ("Santé"), ("Science"), ("Décoration"), ("Divers");

INSERT INTO authors(firstname, lastname)
VALUES("John", "Does"), ("Jack", "Paul");

INSERT INTO articles(title, sentence, content, date, author_id, category_id)
VALUES("Bienvenue sur le site !", "Lorem ipsum dolor sit amet, consectetur adipisicin...", "Lorem ipsum dolor sit amet, consectetur adipisicin...", "2018-03-11 15:00:42", 1, 5),
("Nouveau ! Formation sur le MVC", "Lorem ipsum dolor sit amet, consectetur adipisicin...", "Lorem ipsum dolor sit amet, consectetur adipisicin...", "2018-03-11 15:00:42", 2, 1),
("Différences entre les protons et les néutrons", "Lorem ipsum dolor sit amet, consectetur adipisicin...", "Lorem ipsum dolor sit amet, consectetur adipisicin...", "2018-03-11 15:00:42", 1, 3);


ALTER TABLE articles (
    FOREIGN KEY(author_id) REFERENCES authors(id),
    FOREIGN KEY(category_id) REFERENCES categories(id)
);