CREATE TABLE `banner` (
	`banner_id` INT(11) NOT NULL AUTO_INCREMENT,
	`banner_name` VARCHAR(250) NULL DEFAULT NULL,
	`banner_image` TEXT NULL,
	PRIMARY KEY (`banner_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=5
;
