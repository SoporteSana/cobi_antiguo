
<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='update') {
		if (isset($_POST['Guardar'])) {
			if (isset($_POST['usuario_ID_perfil_editar'])) {
			
				$usuario_ID         = mysqli_real_escape_string($mysqli, trim($_POST['usuario_ID_perfil_editar']));
				$nombre_completo    = mysqli_real_escape_string($mysqli, trim($_POST['nombre_completo_perfil_editar']));
				$usuario           	= mysqli_real_escape_string($mysqli, trim($_POST['usuario_perfil_editar']));
				$correo             = mysqli_real_escape_string($mysqli, trim($_POST['correo_perfil_editar']));
				
				$name_file          = $_FILES['foto_perfil_editar']['name'];
				$ukuran_file        = $_FILES['foto_perfil_editar']['size'];
				$tipe_file          = $_FILES['foto_perfil_editar']['type'];
				$tmp_file           = $_FILES['foto_perfil_editar']['tmp_name'];
				
			
				$allowed_extensions = array('jpg','jpeg','png');
				
				
				$path_file          = "../../imagenes/usuarios/".$name_file;
				
			
				$file               = explode(".", $name_file);
				$extension          = array_pop($file);

			
				if (empty($_FILES['foto_perfil_editar']['name'])) {
			       
                    $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET nombre_completo 	= '$nombre_completo',
                    														usuario 			= '$usuario',
	                    													correo       		= '$correo'
	                                                                  WHERE usuario_ID 			= '$usuario_ID'")
	                                                    or die('error: '.mysqli_error($mysqli));

             
                    if ($query) {
                  
                        header("location: ../../main.php?modulo=perfil&alert=1");
                    }
				}
			
				else {
					
					if (in_array($extension, $allowed_extensions)) {
	                   
	                    if($ukuran_file <= 1000000) { 
	                      
	                     
	                        if(move_uploaded_file($tmp_file, $path_file)) { 
                        		
			                    $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET nombre_completo 	= '$nombre_completo',
			                    														usuario 			= '$usuario',
				                    													correo       		= '$correo',
				                    													foto     			= '$name_file'
				                                                                  WHERE usuario_ID 			= '$usuario_ID'")
				                                                    or die('error: '.mysqli_error($mysqli));

			               
			                    if ($query) {
			                     
			                        header("location: ../../main.php?modulo=perfil&alert=1");
			                    }
                        	} else {
	                           
	                            header("location: ../../main.php?modulo=usuarios&alert=2");
	                        }
	                    } else {
	                       
	                        header("location: ../../main.php?modulo=usuarios&alert=3");
	                    }
	                } else {
	                   
	                    header("location: ../../main.php?modulo=usuarios&alert=4");
	                } 
				}
			}
		}
	}		
}		
?>