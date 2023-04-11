

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$turno 		= mysqli_real_escape_string($mysqli, trim($_POST['turno_agregar']));	
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_agregar']));

            $query 		= mysqli_query($mysqli, "INSERT INTO cat_turnos (turno, alta_ID)
		                                            	VALUES('$turno', '$alta_ID')")
		                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=turnos&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$turno_ID   = mysqli_real_escape_string($mysqli, trim($_POST['turno_ID_editar']));
			$turno 		= mysqli_real_escape_string($mysqli, trim($_POST['turno_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_turnos 
            									SET turno	= '$turno' 
            									WHERE turno_ID = '$turno_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=turnos&alert=2");
            }
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$turno_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_turnos SET estatus_ID  = '$estatus'
                                                          WHERE turno_ID = '$turno_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=turnos&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$turno_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_turnos SET estatus_ID  = '$estatus'
                                                          WHERE turno_ID = '$turno_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=turnos&alert=4");
            }
		}
	}		
}		
?>