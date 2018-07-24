CREATE DATABASE Music default character set utf8

CREATE TABLE Artist(
	artist_id integer not null AUTO_INCREMENT,
    name varchar(128),
    PRIMARY KEY(artist_id)

) ENGINE=INNODB;
