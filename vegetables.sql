CREATE TABLE `vegetables` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(256) NOT NULL,
	`classification` VARCHAR(256) NOT NULL,
	`description` TEXT NOT NULL,
	`editable` TINYINT(1) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB
;
