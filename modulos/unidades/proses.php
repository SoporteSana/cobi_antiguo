

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$unidad 	= mysqli_real_escape_string($mysqli, trim($_POST['unidad_agregar']));
			$placas 	= mysqli_real_escape_string($mysqli, trim($_POST['placas_agregar']));
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_agregar']));

            $query = mysqli_query($mysqli, "INSERT INTO cat_unidades (unidad, placas, alta_ID)
                                            	VALUES('$unidad', '$placas', '$alta_ID')")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=unidades&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$unidad_ID  = mysqli_real_escape_string($mysqli, trim($_POST['unidad_ID_editar']));
			$unidad 	= mysqli_real_escape_string($mysqli, trim($_POST['unidad_editar']));
			$placas 	= mysqli_real_escape_string($mysqli, trim($_POST['placas_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_unidades 
            									SET unidad	= '$unidad',
            										placas = '$placas'
            									WHERE unidad_ID = '$unidad_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=unidades&alert=2");
            }
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$unidad_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_unidades SET estatus_ID  = '$estatus'
                                                          WHERE unidad_ID = '$unidad_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=unidades&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$unidad_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_unidades SET estatus_ID  = '$estatus'
                                                          WHERE unidad_ID = '$unidad_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=unidades&alert=4");
            }
		}
	}		
}		
?>