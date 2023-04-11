

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$unidad_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_unidad_registro_agregar']));
			$semana 		= mysqli_real_escape_string($mysqli, trim($_POST['semana_registro_agregar']));
			$dia 			= mysqli_real_escape_string($mysqli, trim($_POST['dia_registro_agregar']));
			$fecha 			= mysqli_real_escape_string($mysqli, trim($_POST['fecha_registro_agregar']));
			$hora_salida 	= mysqli_real_escape_string($mysqli, trim($_POST['hora_salida_registro_agregar']));
			$alias_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_alias_registro_agregar']));
			$turno_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_turno_registro_agregar']));
			$ruta_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_ruta_registro_agregar']));
			$operador_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_operador_registro_agregar']));
			$tripulantes 	= mysqli_real_escape_string($mysqli, trim($_POST['tripulante_registro_agregar']));
			$km_salida 	= mysqli_real_escape_string($mysqli, trim($_POST['km_salida_registro_agregar']));
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_registro_agregar']));

            $query 		= mysqli_query($mysqli, "INSERT INTO cat_registros (unidad_ID, semana, dia, fecha, alias_ID, turno_ID, ruta_ID, operador_ID, tripulantes, km_salida, hora_salida, alta_ID)
		                                            	VALUES('$unidad_ID', '$semana', '$dia', '$fecha', '$alias_ID', '$turno_ID', '$ruta_ID', '$operador_ID', '$tripulantes', '$km_salida', '$hora_salida', '$alta_ID')")
		                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=registros_supervision&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$registro_ID   		= mysqli_real_escape_string($mysqli, trim($_POST['registro_ID_registro_finalizar']));
			$modificacion_ID   	= mysqli_real_escape_string($mysqli, trim($_POST['modificacion_ID_registro_finalizar']));
			$asignacion_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['asignacion_ID_supervision_agregar']));
			$supervisor_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_supervisor_registro_agregar']));
			$tiempo_ruta 		= mysqli_real_escape_string($mysqli, trim($_POST['tiempo_ruta']));
			$km_recorrido 		= mysqli_real_escape_string($mysqli, trim($_POST['km_recorrido']));
			$litros_cargados 	= mysqli_real_escape_string($mysqli, trim($_POST['litros_cargados']));
			$total_rendimiento 	= mysqli_real_escape_string($mysqli, trim($_POST['total_rendimiento']));

			$tiro_1 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_uno_agregar']));
			$tiro_1_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_1_folio_ticket']));
			$destino_final_tiro_1 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_uno_agregar']));
			$name_destino_final_tiro_1 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_1']));
			
			$tiro_2 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_dos_agregar']));
			$tiro_2_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_2_folio_ticket']));
			$destino_final_tiro_2 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_dos_agregar']));
			$name_destino_final_tiro_2 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_2']));

			$tiro_3 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_tres_agregar']));
			$tiro_3_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_3_folio_ticket']));
			$destino_final_tiro_3 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_tres_agregar']));
			$name_destino_final_tiro_3 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_3']));
			
			$tiro_4 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_cuatro_agregar']));
			$tiro_4_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_4_folio_ticket']));
			$destino_final_tiro_4 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_cuatro_agregar']));
			$name_destino_final_tiro_4 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_4']));

			$tiro_5 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_cinco_agregar']));
			$tiro_5_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_5_folio_ticket']));
			$destino_final_tiro_5 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_cinco_agregar']));
			$name_destino_final_tiro_5 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_5']));
			
			$tiro_6 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_seis_agregar']));
			$tiro_6_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_6_folio_ticket']));
			$destino_final_tiro_6 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_seis_agregar']));
			$name_destino_final_tiro_6 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_6']));

			$tiro_7 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_siete_agregar']));
			$tiro_7_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_7_folio_ticket']));
			$destino_final_tiro_7 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_siete_agregar']));
			$name_destino_final_tiro_7 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_7']));
			
			$tiro_8 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_ocho_agregar']));
			$tiro_8_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_8_folio_ticket']));
			$destino_final_tiro_8 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_ocho_agregar']));
			$name_destino_final_tiro_8 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_8']));
			
			$tiro_9 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_nueve_agregar']));
			$tiro_9_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_9_folio_ticket']));
			$destino_final_tiro_9 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_nueve_agregar']));
			$name_destino_final_tiro_9 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_9']));
			
			$tiro_10 			= mysqli_real_escape_string($mysqli, trim($_POST['id_folio_tiro_diez_agregar']));
			$tiro_10_folio_ticket 			= mysqli_real_escape_string($mysqli, trim($_POST['tiro_10_folio_ticket']));
			$destino_final_tiro_10 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_tiro_diez_agregar']));
			$name_destino_final_tiro_10 			= mysqli_real_escape_string($mysqli, trim($_POST['name_destino_final_tiro_10']));
			

			$total_peso			= mysqli_real_escape_string($mysqli, trim($_POST['total_suma_tickets']));
			$viajes				= mysqli_real_escape_string($mysqli, trim($_POST['viajes_total']));
			$observaciones		= mysqli_real_escape_string($mysqli, trim($_POST['observaciones_supervision']));

            $query = mysqli_query($mysqli, "UPDATE cat_registros 
            										SET asignacion_ID 	=	'$asignacion_ID',
            											supervisor_ID 	=	'$supervisor_ID',
            											tiempo_ruta		=	'$tiempo_ruta',
            											recorrido		=	'$km_recorrido',
            											rendimiento		=	'$total_rendimiento',
            											litros_cargados	=	'$litros_cargados',
            											modificacion_ID	=	'$modificacion_ID',
            											tiro_1			=	'$tiro_1',
														tiro_1_folio_ticket			=	'$tiro_1_folio_ticket',
														destino_final_tiro_1			=	'$destino_final_tiro_1',
														name_destino_final_tiro_1			=	'$name_destino_final_tiro_1',
            											tiro_2			=	'$tiro_2',
														tiro_2_folio_ticket			=	'$tiro_2_folio_ticket',
														destino_final_tiro_2			=	'$destino_final_tiro_2',
														name_destino_final_tiro_2			=	'$name_destino_final_tiro_2',
            											tiro_3			=	'$tiro_3',
														tiro_3_folio_ticket			=	'$tiro_3_folio_ticket',
														destino_final_tiro_3			=	'$destino_final_tiro_3',
														name_destino_final_tiro_3			=	'$name_destino_final_tiro_3',
            											tiro_4			=	'$tiro_4',
														tiro_4_folio_ticket			=	'$tiro_4_folio_ticket',
														destino_final_tiro_4			=	'$destino_final_tiro_4',
														name_destino_final_tiro_4			=	'$name_destino_final_tiro_4',
            											tiro_5			=	'$tiro_5',
														tiro_5_folio_ticket			=	'$tiro_5_folio_ticket',
														destino_final_tiro_5			=	'$destino_final_tiro_5',
														name_destino_final_tiro_5			=	'$name_destino_final_tiro_5',
            											tiro_6			=	'$tiro_6',
														tiro_6_folio_ticket			=	'$tiro_6_folio_ticket',
														destino_final_tiro_6			=	'$destino_final_tiro_6',
														name_destino_final_tiro_6			=	'$name_destino_final_tiro_6',
            											tiro_7			=	'$tiro_7',
														tiro_7_folio_ticket			=	'$tiro_7_folio_ticket',
														destino_final_tiro_7			=	'$destino_final_tiro_7',
														name_destino_final_tiro_7			=	'$name_destino_final_tiro_7',
														tiro_8			=	'$tiro_8',
														tiro_8_folio_ticket			=	'$tiro_8_folio_ticket',
														destino_final_tiro_8			=	'$destino_final_tiro_8',
														name_destino_final_tiro_8			=	'$name_destino_final_tiro_8',
														tiro_9			=	'$tiro_9',
														tiro_9_folio_ticket			=	'$tiro_9_folio_ticket',
														destino_final_tiro_9			=	'$destino_final_tiro_9',
														name_destino_final_tiro_9			=	'$name_destino_final_tiro_9',
														tiro_10			=	'$tiro_10',
														tiro_10_folio_ticket			=	'$tiro_10_folio_ticket',
														destino_final_tiro_10			=	'$destino_final_tiro_10',
														name_destino_final_tiro_10			=	'$name_destino_final_tiro_10',
            											total_peso		=	'$total_peso',
            											viajes			=	'$viajes',
            											observaciones	=	'$observaciones',
            											estatus_ID		=	'3'
            									WHERE registro_ID = '$registro_ID'")
                                            or die('error: '.mysqli_error($mysqli));

			$query_tiro_1 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_1'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_2 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_2'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_3 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_2'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_4 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_4'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_5 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_5'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_6 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_6'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_7 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_7'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_8 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_8'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_9 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_9'")
											or die('error: '.mysqli_error($mysqli));
			$query_tiro_10 = mysqli_query($mysqli, "UPDATE cat_tickets_bascula
													SET estatus_ID 	=	'2'
												WHERE ticket_ID = '$tiro_10'")
											or die('error: '.mysqli_error($mysqli));								
			
            if ($query_tiro_10) {
                header("location: ../../main.php?modulo=registros_supervision&alert=2");
            }
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$registro_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_registros SET estatus_ID  = '$estatus'
                                                          WHERE registro_ID = '$registro_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=registros_supervision&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$registro_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_registros SET estatus_ID  = '$estatus'
                                                          WHERE registro_ID = '$registro_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=registros_supervision&alert=4");
            }
		}
	}		
}		
?>