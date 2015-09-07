ALTER TABLE `#__workteam` CHANGE `contact_name` `contact_name` VARCHAR(255) ;
ALTER TABLE `#__workteam` CHANGE `email` `email` VARCHAR(255) ;
ALTER TABLE `#__workteam` CHANGE `img_user` `img_user` VARCHAR(255) ;
ALTER TABLE `#__workteam` ADD `sex_user` tinyint(4) NOT NULL DEFAULT '0';
