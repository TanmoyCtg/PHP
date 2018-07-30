CREATE DATABASE roster DEFAULT CHARACTER SET utf8 
CREATE TABLE `User` (
    user_id     INTEGER NOT NULL AUTO_INCREMENT,
    name        VARCHAR(128) UNIQUE,
    PRIMARY KEY(user_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

CREATE TABLE Course (
    course_id     INTEGER NOT NULL AUTO_INCREMENT,
    title         VARCHAR(128) UNIQUE,
    PRIMARY KEY(course_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

CREATE TABLE Member (
    user_id       INTEGER,
    course_id     INTEGER,
    role          INTEGER,

    CONSTRAINT FOREIGN KEY (user_id) REFERENCES `User` (user_id)
      ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (course_id) REFERENCES Course (course_id)
       ON DELETE CASCADE ON UPDATE CASCADE,

    PRIMARY KEY (user_id, course_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

INSERT INTO `course`( `course_id`,`title`) VALUES (1,"si106");
INSERT INTO `course`(`course_id`, `title`) VALUES (2,"si106");
INSERT INTO `course`( `course_id`,`title`) VALUES (3,"si106");
INSERT INTO `course`(`course_id`, `title`) VALUES (4,"si106");
INSERT INTO `course`( `course_id`,`title`) VALUES (5,"si106");
INSERT INTO `course`( `course_id`,`title`) VALUES (6,"si110");
INSERT INTO `course`( `course_id`,`title`) VALUES (7,"si110");
INSERT INTO `course`( `course_id`,`title`) VALUES (8,"si110");
INSERT INTO `course`( `course_id`,`title`) VALUES (9,"si110");
INSERT INTO `course`(`course_id`, `title`) VALUES (10,"si110");
INSERT INTO `course`(`course_id`, `title`) VALUES (11,"si206");
INSERT INTO `course`( `course_id`,`title`) VALUES (12,"si206");
INSERT INTO `course`( `course_id`,`title`) VALUES (13,"si206");
INSERT INTO `course`(`course_id`, `title`) VALUES (14,"si206");
INSERT INTO `course`(`course_id`, `title`) VALUES (15,"si206");
