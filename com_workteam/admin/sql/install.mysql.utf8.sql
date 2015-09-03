DROP TABLE IF EXISTS `#__workteam`;

CREATE TABLE `#__workteam` (
	`id`       INT(11) NOT NULL AUTO_INCREMENT,
	`contact_name` VARCHAR(60) NOT NULL,
   `email` VARCHAR(100) NULL,
   `img_user` VARCHAR(25) NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__workteam` (`contact_name`) VALUES
('Miguel'),
('Maribel');
