/* Author iatwork4u */

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET TIME_ZONE = "+05:30";


/* TALBEL FOR LOGIN DETAILS */
CREATE TABLE IF NOT EXISTS `LOGIN`(
  `id` INT(9999999) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `mobno` INT(10) NOT NULL,
  `status` INT(1) NOT NULL,
  `date` DATE NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


/* TABLE FOR REGESTERED USERS */
CREATE TABLE IF NOT EXISTS `user_registration` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `mob_no` varchar(180) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `exp` varchar(180) NOT NULL,
  `edu` varchar(180) NOT NULL,
  `dob` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10621 DEFAULT CHARSET=latin1;