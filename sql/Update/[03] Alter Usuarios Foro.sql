-- --------------
-- FORO USUARIOS
-- -------------
ALTER TABLE `account` ADD COLUMN `personaje` INT(11) DEFAULT 0 NULL AFTER `password`;
