

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$turno_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_turno_agregar']));
			$ruta_ID 		= mysqli_real_escape_string($mysqli, trim($_POST['id_ruta_agregar']));
			$alias 		= mysqli_real_escape_string($mysqli, trim($_POST['alias_agregar']));
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_agregar']));

            $query 		= mysqli_query($mysqli, "INSERT INTO cat_alias (turno_ID, ruta_ID, alias, alta_ID)
		                                            	VALUES('$turno_ID', '$ruta_ID','$alias','$alta_ID')")
		                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=alias&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$alias_ID   = mysqli_real_escape_string($mysqli, trim($_POST['alias_ID_editar']));
			$alias 		= mysqli_real_escape_string($mysqli, trim($_POST['alias_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_alias 
            									SET alias	= '$alias' 
            									WHERE alias_ID = '$alias_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=alias&alert=2");
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
               
                header("location: ../../main.php?modulo=alias&alert=3");
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
              
                header("location: ../../main.php?modulo=alias&alert=4");
            }
		}
	}		
}		
?>