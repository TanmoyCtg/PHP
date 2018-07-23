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
