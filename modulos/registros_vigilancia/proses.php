

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
			$hora_recorridas 	= mysqli_real_escape_string($mysqli, trim($_POST['hora_recorridas_registro_agregar']));
			$alias_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_alias_registro_agregar']));
			$turno_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_turno_registro_agregar']));
			$ruta_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_ruta_registro_agregar']));
			$operador_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_operador_registro_agregar']));
			$tripulantes 	= mysqli_real_escape_string($mysqli, trim($_POST['recolector_registro_agregar']));
			$recolector_1_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_recolector_uno_agregar']));
			$recolector_2_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_recolector_dos_agregar']));
			$recolector_3_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_recolector_tres_agregar']));
			$recolector_4_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_recolector_cuatro_agregar']));
			$recolector_5_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_recolector_cinco_agregar']));
			$km_salida 	= mysqli_real_escape_string($mysqli, trim($_POST['km_salida_registro_agregar']));
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_registro_agregar']));

            $query 		= mysqli_query($mysqli, "INSERT INTO cat_registros (unidad_ID, semana, dia, fecha, alias_ID, turno_ID, ruta_ID, operador_ID, tripulantes, recolector_1_ID, recolector_2_ID, recolector_3_ID, recolector_4_ID, recolector_5_ID, km_salida, hora_salida, hora_recorridas, alta_ID)
		                                            	VALUES('$unidad_ID', '$semana', '$dia', '$fecha', '$alias_ID', '$turno_ID', '$ruta_ID', '$operador_ID', '$tripulantes', '$recolector_1_ID', '$recolector_2_ID', '$recolector_3_ID', '$recolector_4_ID', '$recolector_5_ID', '$km_salida', '$hora_salida', '$hora_recorridas','$alta_ID')")
		                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=registros_vigilancia&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$registro_ID   		= mysqli_real_escape_string($mysqli, trim($_POST['registro_ID_registro_finalizar']));
			$modificacion_ID   	= mysqli_real_escape_string($mysqli, trim($_POST['modificacion_ID_registro_finalizar']));
			$hora_entrada 		= mysqli_real_escape_string($mysqli, trim($_POST['hora_entrada_registro_finalizar']));
			$km_entrada 		= mysqli_real_escape_string($mysqli, trim($_POST['km_entrada_registro_finalizar']));

            $query = mysqli_query($mysqli, "UPDATE cat_registros 
            										SET hora_entrada	=	'$hora_entrada',
            											km_entrada		=	'$km_entrada',
            											modificacion_ID	=	'$modificacion_ID',
            											estatus_ID	=	'2'
            									WHERE registro_ID = '$registro_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=registros_vigilancia&alert=2");
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
               
                header("location: ../../main.php?modulo=registros_vigilancia&alert=3");
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
              
                header("location: ../../main.php?modulo=registros_vigilancia&alert=4");
            }
		}
	}		
}		
?>