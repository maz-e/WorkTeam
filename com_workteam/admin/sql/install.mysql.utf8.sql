DROP TABLE IF EXISTS `#__workteam`;

CREATE TABLE `#__workteam` (
	`id`       INT(11) NOT NULL AUTO_INCREMENT,
	`contact_name` VARCHAR(255) NOT NULL,
   `email` VARCHAR(255) NULL,
   `img_user` VARCHAR(255) NULL,
	`sex_user` tinyint(4) NOT NULL DEFAULT '0',
	`published` tinyint(4) NOT NULL,
	`catid`	    int(11)    NOT NULL DEFAULT '0',
	`params`   VARCHAR(1024) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
