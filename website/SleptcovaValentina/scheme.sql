DROP TABLE IF EXISTS authors;
DROP TABLE IF EXISTS books;
CREATE TABLE authors (
	AuthorID int NOT NULL PRIMARY KEY, 
	FirstName varchar(50),
	FamilyName varchar(50)
);
DESCRIBE authors;
CREATE TABLE books (
	BookID int PRIMARY KEY,
	AuthorID int NOT NULL REFERENCES authors(AuthorID), 
	Title varchar(255) NOT NULL, 
	Year int NOT NULL default '2000'
	);
DESCRIBE books;
INSERT INTO authors VALUES (1,'Лев','Толстой');
INSERT INTO authors VALUES (2,'Федор','Достоевский');
INSERT INTO authors VALUES (3,'Сергей','Лукьяненко');
INSERT INTO books VALUES (1,1,'Война и Мир',1868);
INSERT INTO books VALUES (2,1,'Анна Каренина',1878);
INSERT INTO books VALUES (3,2,'Преступление и наказание',1866);
INSERT INTO books VALUES (4,2,'Идиот',1868);
INSERT INTO books VALUES (5,2,'Братья Карамазовы',1880);
INSERT INTO books VALUES (6,2,'Бесы',1872);
INSERT INTO books VALUES (7,3,'Лабиринт Отражений',1997);
