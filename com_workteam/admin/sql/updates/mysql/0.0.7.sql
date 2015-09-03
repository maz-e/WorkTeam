ALTER TABLE `#__helloworld` ADD `contact_name` VARCHAR(60) NOT NULL,
ALTER TABLE `#__helloworld` DROP `name` int(11) NOT NULL DEFAULT '0';
ALTER TABLE `#__helloworld` DROP `surname` int(11) NOT NULL DEFAULT '0';
