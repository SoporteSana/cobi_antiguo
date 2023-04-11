CREATE TABLE `cat_destino_final` (
  `destino_final_ID` int(11) NOT NULL,
  `destino_final` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alta_ID` int(11) DEFAULT NULL,
  `estatus_ID` int(11) DEFAULT 1,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `cat_destino_final`
  ADD PRIMARY KEY (`destino_final_ID`);
ALTER TABLE `cat_destino_final`
  MODIFY `destino_final_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


ALTER TABLE `cat_registros` ADD `destino_final_tiro_1` INT(11) NULL AFTER `tiro_1`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_2` INT(11) NULL AFTER `tiro_2`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_3` INT(11) NULL AFTER `tiro_3`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_4` INT(11) NULL AFTER `tiro_4`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_5` INT(11) NULL AFTER `tiro_5`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_6` INT(11) NULL AFTER `tiro_6`;
ALTER TABLE `cat_registros` ADD `destino_final_tiro_7` INT(11) NULL AFTER `tiro_7`;

ALTER TABLE `cat_registros` ADD `tiro_1_folio_ticket` INT(11) NULL AFTER `tiro_1`;
ALTER TABLE `cat_registros` ADD `tiro_2_folio_ticket` INT(11) NULL AFTER `tiro_2`;
ALTER TABLE `cat_registros` ADD `tiro_3_folio_ticket` INT(11) NULL AFTER `tiro_3`;
ALTER TABLE `cat_registros` ADD `tiro_4_folio_ticket` INT(11) NULL AFTER `tiro_4`;
ALTER TABLE `cat_registros` ADD `tiro_5_folio_ticket` INT(11) NULL AFTER `tiro_5`;
ALTER TABLE `cat_registros` ADD `tiro_6_folio_ticket` INT(11) NULL AFTER `tiro_6`;
ALTER TABLE `cat_registros` ADD `tiro_7_folio_ticket` INT(11) NULL AFTER `tiro_7`;

ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_1` varchar(50) NULL AFTER `destino_final_tiro_1`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_2` varchar(50) NULL AFTER `destino_final_tiro_2`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_3` varchar(50) NULL AFTER `destino_final_tiro_3`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_4` varchar(50) NULL AFTER `destino_final_tiro_4`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_5` varchar(50) NULL AFTER `destino_final_tiro_5`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_6` varchar(50) NULL AFTER `destino_final_tiro_6`;
ALTER TABLE `cat_registros` ADD `name_destino_final_tiro_7` varchar(50) NULL AFTER `destino_final_tiro_7`;

INSERT INTO `cat_perfiles` (`perfil_ID`, `perfil`) VALUES ('5', 'Recursos Humanos');



UPDATE cat_registros 
SET tiro_1 = '0',
tiro_2 = '0',
tiro_3 = '0',
tiro_4 = '0',
tiro_5 = '0',
tiro_6 = '0',
tiro_7 = '0'
WHERE estatus_ID ='3';


UPDATE cat_registros 
SET destino_final_tiro_1 = '0',
destino_final_tiro_2 = '0',
destino_final_tiro_3 = '0',
destino_final_tiro_4 = '0',
destino_final_tiro_5 = '0',
destino_final_tiro_6 = '0',
destino_final_tiro_7 = '0'
WHERE estatus_ID ='3';


-- =====================NO ES NECESARIO EJECUTAR LO SIGUIENTE ===========0
-- UPDATE cat_registros 
-- SET name_destino_final_tiro_1 = 'Sin destino',
-- name_destino_final_tiro_2 = 'Sin destino',
-- name_destino_final_tiro_3 = 'Sin destino',
-- name_destino_final_tiro_4 = 'Sin destino',
-- name_destino_final_tiro_5 = 'Sin destino',
-- name_destino_final_tiro_6 = 'Sin destino',
-- name_destino_final_tiro_7 = 'Sin destino'
-- WHERE estatus_ID ='3';


-- UPDATE cat_registros 
-- SET tiro_1_folio_ticket = '0',
-- tiro_2_folio_ticket = '0',
-- tiro_3_folio_ticket = '0',
-- tiro_4_folio_ticket = '0',
-- tiro_5_folio_ticket = '0',
-- tiro_6_folio_ticket = '0',
-- tiro_7_folio_ticket = '0'
-- WHERE estatus_ID ='3';


-- ALTER TABLE `cat_tickets_bascula` ADD `destino_final_ID` INT(11) NULL AFTER `fecha`;

-- INSERT INTO `cat_destino_final` (`destino_final_ID`, `destino_final`, `alta_ID`, `estatus_ID`, `created_time`, `updated_time`) VALUES ('0', 'Sin destino final', '1', '1', current_timestamp(), current_timestamp());
-- UPDATE `cat_destino_final` SET `destino_final_ID` = '0' WHERE `cat_destino_final`.`destino_final_ID` = 1;

-- INSERT INTO `cat_tickets_bascula` (`ticket_ID`, `folio_ticket`, `peso_neto`, `unidad_ID`, `fecha`, `destino_final_ID`, `alta_ID`, `modificacion_ID`, `estatus_ID`, `created_time`, `updated_time`) VALUES ('0', '0', '0', '0', '2021-04-01', '0', '1', NULL, '1', current_timestamp(), current_timestamp());
-- UPDATE `cat_tickets_bascula` SET `ticket_ID` = '0' WHERE `cat_tickets_bascula`.`ticket_ID` = 33560;

-- INSERT INTO `cat_unidades` (`unidad_ID`, `unidad`, `placas`, `alta_ID`, `estatus_ID`, `created_time`, `updated_time`) VALUES ('0', 'sin unidad', '00-0000-0', '1', '1', current_timestamp(), current_timestamp());
-- UPDATE `cat_unidades` SET `unidad_ID` = '0' WHERE `cat_unidades`.`unidad_ID` = 55;