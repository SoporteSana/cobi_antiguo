

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$nombre_completo 	= mysqli_real_escape_string($mysqli, trim($_POST['nombre_completo_agregar']));	
			$alta_ID  			= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_agregar']));

            $query = mysqli_query($mysqli, "INSERT INTO cat_recolectores (nombre_completo, alta_ID)
                                            	VALUES('$nombre_completo', '$alta_ID')")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=recolectores&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$recolector_ID      = mysqli_real_escape_string($mysqli, trim($_POST['recolector_ID_editar']));
			$nombre_completo 	= mysqli_real_escape_string($mysqli, trim($_POST['nombre_completo_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_recolectores 
            									SET nombre_completo	= '$nombre_completo' 
            									WHERE recolector_ID = '$recolector_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=recolectores&alert=2");
            }
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$recolector_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_recolectores SET estatus_ID  = '$estatus'
                                                          WHERE recolector_ID = '$recolector_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=recolectores&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$recolector_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_recolectores SET estatus_ID  = '$estatus'
                                                          WHERE recolector_ID = '$recolector_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=recolectores&alert=4");
            }
		}
	}		
}		
?>