USE test;
CREATE TABLE `udaje_reg` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`meno` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`heslo` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`datumreg` TIMESTAMP NOT NULL DEFAULT current_timestamp(),
	`priezvisko` VARCHAR(250) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
