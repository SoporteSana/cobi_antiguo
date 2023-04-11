

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
			$asignacion_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['asignacion_ID_registro_agregar']));
			$semana 		= mysqli_real_escape_string($mysqli, trim($_POST['semana_registro_agregar']));
			$dia 			= mysqli_real_escape_string($mysqli, trim($_POST['dia_registro_agregar']));
			$fecha 			= mysqli_real_escape_string($mysqli, trim($_POST['fecha_registro_agregar']));
			$hora_salida 	= mysqli_real_escape_string($mysqli, trim($_POST['hora_salida_registro_agregar']));
			$supervisor_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_supervisor_registro_agregar']));
			$alias_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_alias_registro_agregar']));
			$turno_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_turno_registro_agregar']));
			$ruta_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_ruta_registro_agregar']));
			$operador_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_operador_registro_agregar']));
			$tripulantes 	= mysqli_real_escape_string($mysqli, trim($_POST['tripulante_registro_agregar']));
			$km_salida 	= mysqli_real_escape_string($mysqli, trim($_POST['km_salida_registro_agregar']));
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_registro_agregar']));

            $query 		= mysqli_query($mysqli, "INSERT INTO cat_registros (unidad_ID, asignacion_ID, semana, dia, fecha, supervisor_ID, alias_ID, turno_ID, ruta_ID, operador_ID, tripulantes, km_salida, hora_salida, alta_ID)
		                                            	VALUES('$unidad_ID', '$asignacion_ID', '$semana', '$dia', '$fecha', '$supervisor_ID', '$alias_ID', '$turno_ID', '$ruta_ID', '$operador_ID', '$tripulantes', '$km_salida', '$hora_salida', '$alta_ID')")
		                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=registros&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$alias_ID   = mysqli_real_escape_string($mysqli, trim($_POST['alias_ID_editar']));
			$alias 		= mysqli_real_escape_string($mysqli, trim($_POST['alias_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_registros 
            									SET alias	= '$alias' 
            									WHERE alias_ID = '$alias_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=registros&alert=2");
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
               
                header("location: ../../main.php?modulo=registros&alert=3");
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
              
                header("location: ../../main.php?modulo=registros&alert=4");
            }
		}
	}		
}		
?>