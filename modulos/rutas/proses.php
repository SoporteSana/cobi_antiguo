

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$ruta 		= mysqli_real_escape_string($mysqli, trim($_POST['ruta_agregar']));	
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_agregar']));

            $query 		= mysqli_query($mysqli, "INSERT INTO cat_rutas (ruta, alta_ID)
		                                            	VALUES('$ruta', '$alta_ID')")
		                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=rutas&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$ruta_ID   = mysqli_real_escape_string($mysqli, trim($_POST['ruta_ID_editar']));
			$ruta 		= mysqli_real_escape_string($mysqli, trim($_POST['ruta_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_rutas 
            									SET ruta	= '$ruta' 
            									WHERE ruta_ID = '$ruta_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=rutas&alert=2");
            }
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$ruta_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_rutas SET estatus_ID  = '$estatus'
                                                          WHERE ruta_ID = '$ruta_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=rutas&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$ruta_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_rutas SET estatus_ID  = '$estatus'
                                                          WHERE ruta_ID = '$ruta_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=rutas&alert=4");
            }
		}
	}		
}		
?>