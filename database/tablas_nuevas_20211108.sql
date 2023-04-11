ALTER TABLE `cat_registros` ADD `tiro_8` INT(11) NULL AFTER `tiro_7`;
ALTER TABLE `cat_registros` ADD `tiro_10` INT(11) NULL AFTER `tiro_8`;
ALTER TABLE `cat_registros` ADD `tiro_10` INT(11) NULL AFTER `tiro_9`;

ALTER TABLE `cat_registros` ADD `destino_final_tiro_8` INT(11) NULL AFTER `tiro_8`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_9` INT(11) NULL AFTER `tiro_9`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_10` INT(11) NULL AFTER `tiro_10`;

ALTER TABLE `cat_registros` ADD `tiro_8_folio_ticket` INT(11) NULL AFTER `tiro_8`;
ALTER TABLE `cat_registros` ADD `tiro_9_folio_ticket` INT(11) NULL AFTER `tiro_9`;
ALTER TABLE `cat_registros` ADD `tiro_10_folio_ticket` INT(11) NULL AFTER `tiro_10`;

ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_8` varchar(50) NULL AFTER `destino_final_tiro_8`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_9` varchar(50) NULL AFTER `destino_final_tiro_9`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_10` varchar(50) NULL AFTER `destino_final_tiro_10`;