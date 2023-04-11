

<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {

			$destino_final 		= mysqli_real_escape_string($mysqli, trim($_POST['destino_final_agregar']));	
			$alta_ID  	= mysqli_real_escape_string($mysqli, trim($_POST['alta_id_agregar']));

            $query 		= mysqli_query($mysqli, "INSERT INTO cat_destino_final (destino_final, alta_ID)
		                                            	VALUES('$destino_final', '$alta_ID')")
		                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=destino_final&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {

			$destino_final_ID   = mysqli_real_escape_string($mysqli, trim($_POST['destino_final_ID_editar']));
			$destino_final 		= mysqli_real_escape_string($mysqli, trim($_POST['destino_final_editar']));

            $query = mysqli_query($mysqli, "UPDATE cat_destino_final 
            									SET destino_final	= '$destino_final' 
            									WHERE destino_final_ID = '$destino_final_ID'")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=destino_final&alert=2");
            }
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$destino_final_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_destino_final SET estatus_ID  = '$estatus'
                                                          WHERE destino_final_ID = '$destino_final_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=destino_final&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$destino_final_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_destino_final SET estatus_ID  = '$estatus'
                                                          WHERE destino_final_ID = '$destino_final_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=destino_final&alert=4");
            }
		}
	}		
}		
?>