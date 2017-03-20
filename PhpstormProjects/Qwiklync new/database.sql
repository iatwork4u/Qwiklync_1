/* Author iatwork4u */

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET TIME_ZONE = "+05:30";



/* TABLE FOR REGESTERED USERS */
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(25) NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(200) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `mobno` VARCHAR(180) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `country` VARCHAR(30) NOT NULL,
  `exp` VARCHAR(180) NOT NULL,
  `edu` VARCHAR(180) NOT NULL,
  `dob` date NOT NULL,
  `des` TEXT(600),
  PRIMARY KEY (id)
) ENGINE = MyISAM AUTO_INCREMENT = 1 DEFAULT CHARSET = latin1;

/* TABLE FOR RESUME / CV */

CREATE TABLE IF NOT EXISTS `resume` (
  `id` INT(10) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `resume` NOT NULL,

  FOREIGN KEY (id),
  PRIMARY KEY (email)
);

/* Table to store resume data */