CREATE DATABASE Music default character set utf8

CREATE TABLE Artist(
	artist_id integer not null AUTO_INCREMENT,
    name varchar(128),
    PRIMARY KEY(artist_id)

) ENGINE=INNODB;


CREATE TABLE Album(
	album_id integer NOT null AUTO_INCREMENT,
    title varchar(255),
    artist_id integer,
    PRIMARY KEY(album_id),
    INDEX USING BTREE (title),
    
    CONSTRAINT FOREIGN KEY(artist_id)
    REFERENCES Artist (artist_id)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE Genre(
genre_id integer NOT null AUTO_INCREMENT,
name varchar(255),
PRIMARY KEY(genre_id)
) ENGINE=INNODB;

CREATE TABLE Track (
  track_id INTEGER NOT NULL AUTO_INCREMENT,
  title VARCHAR(255),
  len INTEGER,
  rating INTEGER,
  count INTEGER,
  album_id INTEGER,
  genre_id INTEGER,

  PRIMARY KEY(track_id),
  INDEX USING BTREE (title),

  CONSTRAINT FOREIGN KEY (album_id) REFERENCES Album (album_id)
    ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT FOREIGN KEY (genre_id) REFERENCES Genre (genre_id)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;



INSERT INTO Artist (name) VALUES ('Led Zepplin');
INSERT INTO Artist (name) VALUES ('AC/DC');

INSERT INTO Genre (name) VALUES ('Rock');
INSERT INTO Genre (name) VALUES ('Metal');

INSERT INTO Album (title, artist_id) VALUES ('Who Made Who', 2);
INSERT INTO Album (title, artist_id) VALUES ('IV', 1);

INSERT INTO Track (title, rating, len, count, album_id, genre_id)
    VALUES ('Black Dog', 5, 297, 0, 2, 1);
INSERT INTO Track (title, rating, len, count, album_id, genre_id)
    VALUES ('Stairway', 5, 482, 0, 2, 1);
INSERT INTO Track (title, rating, len, count, album_id, genre_id)
    VALUES ('About to Rock', 5, 313, 0, 1, 2);
INSERT INTO Track (title, rating, len, count, album_id, genre_id)
    VALUES ('Who Made Who', 5, 207, 0, 1, 2);
     
------------------------------------ Assignment-----------------------------------------

INSERT INTO `artist`(`artist_id`, `name`) VALUES (3,"joy") 
INSERT INTO `album`(`album_id`, `title`, `artist_id`) VALUES (4,"UP AND UP",1);
INSERT INTO `album`(`album_id`, `title`, `artist_id`) VALUES (5,"NIGGA NIGGA",2);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (5,"ROCK AND ROLL",300,4,0,3,1);


INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (6,"life without you",200,5,0,4,2);


INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (7,"UP AND UP",240,5,0,2,1);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (8,"YO NIGGI",350,3,0,5,2);


INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (9,"Girls Like You ft cardi B",300,4,0,1,1);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (10,"Cheap Thrills ft sean paul",400,4,0,4,2);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (11,"Fix you",340,5,0,5,1);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (12,"Simple Plan",310,3,0,2,2);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (13,"Perfectly Perfect",350,5,0,1,1);


INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (14,"Photograph",324,3,0,5,2);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (15,"Galway Girl",280,4,0,4,1);


INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (16,"Despacito",330,5,0,3,2);


INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (17,"Back to you",300,5,0,2,1);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (18,"Something just like this",300,4,0,1,2);

INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (19,"old friends",300,4,0,2,2);


INSERT INTO `track`(`track_id`, `title`, `len`, `rating`, `count`, `album_id`, `genre_id`) VALUES (20,"Faded",300,4,0,1,1);


SELECT album.title, track.title,artist.name,genre.name FROM album JOIN artist JOIN genre JOIN track ON 
	album.album_id = track.album_id AND 
	genre.genre_id = track.genre_id AND 
    album.artist_id = artist.artist_id ORDER BY
    album.title ASC;
    
    
SELECT DISTINCT artist.name,genre.name FROM track JOIN album JOIN genre JOIN artist ON 
	track.album_id = album.album_id AND 
	genre.genre_id = track.genre_id AND 
	artist.artist_id = album.artist_id
	WHERE artist.name='Led Zepplin'

    
    

