CREATE DATABASE People DEFAULT CHARACTER SET utf8 
CREATE TABLE users( name varchar(30), email varchar(30) )

INSERT INTO users(name, email) VALUES ("Chuck","csev@umich.edu");
INSERT INTO users(name, email) VALUES ("caitlin","cat@umich.edu") ;
INSERT INTO users(name, email) VALUES ("sally","sally@umich.edu") ;
INSERT INTO users(name, email) VALUES ("somesh","somesh@umich.edu") ;
INSERT INTO users(name, email) VALUES ("Ted","ted@umich.edu") ;

DELETE FROM users WHERE email = "ted@umich.edu" 
UPDATE users SET name="charles" WHERE email="csev@umich.edu"

//Like is a wildcard clause. it's use for searching. search for matching.
SELECT * FROM `users` WHERE name LIKE '%e%'
//show all the people who have "e" in their name

SELECT COUNT(*) FROM users
// how many users in the database. count() function count the users in the table.
SELECT * FROM `users` WHERE 1

CREATE DATABASE Ages DEFAULT CHARACTER SET utf8

CREATE TABLE Ages( name varchar(128), age integer ) 

DELETE FROM ages 

INSERT INTO Ages (name, age) VALUES ('Zahra', 34) 
INSERT INTO Ages (name, age) VALUES ('Olufunke', 23) 
INSERT INTO Ages (name, age) VALUES ('Choire', 38) 
INSERT INTO Ages (name, age) VALUES ('Makenna', 32) 
INSERT INTO Ages (name, age) VALUES ('Ula', 16) 
INSERT INTO Ages (name, age) VALUES ('Garren', 40) 

SELECT sha1(CONCAT(name,age)) AS X FROM Ages ORDER BY X

SELECT sha1(CONCAT(name,age)) AS X FROM Ages Where name="Zahra" ORDER BY X 


INSERT INTO Ages (name, age) VALUES ('Brannan', 38);
INSERT INTO Ages (name, age) VALUES ('Latisha', 27);
INSERT INTO Ages (name, age) VALUES ('Ariana', 15);
INSERT INTO Ages (name, age) VALUES ('Kacee', 14);

