DROP TABLE IF EXISTS `#__workteam`;

CREATE TABLE `#__workteam` (
	`id`       INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(25) NOT NULL,
   `surname` VARCHAR(25) NULL,
   `email` VARCHAR(100) NOT NULL,
   `img_user` VARCHAR(25) NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__workteam` (`name`) VALUES
('Miguel'),
('Maribel');
