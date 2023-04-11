

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$folio_ticket 	= mysqli_real_escape_string($mysqli, trim($_POST['folio_ticket_agregar']));
			$peso_neto 		= mysqli_real_escape_string($mysqli, trim($_POST['peso_ticket_agregar']));
			$unidad_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_unidad_ticket_agregar']));
			$fecha 			= mysqli_real_escape_string($mysqli, trim($_POST['fecha_ticket_agregar']));
			// $destino_final_ID 			= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_t_agregar']));
			$alta_ID  		= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_ticket_agregar']));

            $query 			= mysqli_query($mysqli, "INSERT INTO cat_tickets_bascula (folio_ticket, peso_neto, unidad_ID, fecha, alta_ID)
		                                            	VALUES('$folio_ticket', '$peso_neto', '$unidad_ID', '$fecha', '$alta_ID')")
            											or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=tickets&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$ticket_ID 			= mysqli_real_escape_string($mysqli, trim($_POST['tickets_ID_editar']));
			$folio_ticket 		= mysqli_real_escape_string($mysqli, trim($_POST['folio_ticket_editar']));
			$peso_neto 			= mysqli_real_escape_string($mysqli, trim($_POST['peso_ticket_editar']));
			$unidad_ID 			= mysqli_real_escape_string($mysqli, trim($_POST['id_unidad_ticket_editar']));
			$fecha 				= mysqli_real_escape_string($mysqli, trim($_POST['fecha_ticket_editar']));
			// $destino_final_ID 	= mysqli_real_escape_string($mysqli, trim($_POST['id_destino_final_t_editar']));
			$modificacion_ID	= mysqli_real_escape_string($mysqli, trim($_POST['modificacion_id_ticket_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_tickets_bascula 
            										SET 
            											folio_ticket	= '$folio_ticket',
            											peso_neto		= '$peso_neto',
            											unidad_ID		= '$unidad_ID',
            											fecha			= '$fecha',
            											modificacion_ID	= '$modificacion_ID'
            										WHERE ticket_ID = '$ticket_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=tickets&alert=2");
            }
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$alias_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_alias SET estatus_ID  = '$estatus'
                                                          WHERE alias_ID = '$alias_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=tickets&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$alias_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_alias SET estatus_ID  = '$estatus'
                                                          WHERE alias_ID = '$alias_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=tickets&alert=4");
            }
		}
	}		
}		
?>