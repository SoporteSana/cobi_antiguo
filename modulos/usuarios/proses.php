

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
			$usuario  			= mysqli_real_escape_string($mysqli, trim($_POST['usuario_agregar']));
			$password  			= md5(mysqli_real_escape_string($mysqli, trim($_POST['password_agregar'])));
			$perfil_ID 			= mysqli_real_escape_string($mysqli, trim($_POST['perfil_ID_agregar']));

            $query = mysqli_query($mysqli, "INSERT INTO cat_usuarios (nombre_completo, usuario, password, perfil_ID)
                                            	VALUES('$nombre_completo', '$usuario', '$password', '$perfil_ID')")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?modulo=usuarios&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {

		if (isset($_POST['Guardar'])) {
			if (isset($_POST['usuario_ID_editar'])) {
				$usuario_ID        	= mysqli_real_escape_string($mysqli, trim($_POST['usuario_ID_editar']));
				$nombre_completo   	= mysqli_real_escape_string($mysqli, trim($_POST['nombre_completo_editar']));
				$usuario           	= mysqli_real_escape_string($mysqli, trim($_POST['usuario_editar']));
				$correo             = mysqli_real_escape_string($mysqli, trim($_POST['correo_editar']));
				$password          	= md5(mysqli_real_escape_string($mysqli, trim($_POST['password_editar'])));
				$perfil_ID          = mysqli_real_escape_string($mysqli, trim($_POST['perfil_ID_editar']));
				
				$name_file          = $_FILES['foto_editar']['name'];
				$ukuran_file        = $_FILES['foto_editar']['size'];
				$tipe_file          = $_FILES['foto_editar']['type'];
				$tmp_file           = $_FILES['foto_editar']['tmp_name'];
				
		
				$allowed_extensions = array('jpg','jpeg','png');
				
			
				$path_file          = "../../imagenes/usuarios/".$name_file;
		
				$file               = explode(".", $name_file);
				$extension          = array_pop($file);

				if (empty($_POST['password_editar']) && empty($_FILES['foto_editar']['name'])) {
					
                    $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET nombre_completo 	= '$nombre_completo',
	                    													usuario 			= '$usuario',
	                    													correo       		= '$correo',
	                    													perfil_ID   = '$perfil_ID'
	                                                                  WHERE usuario_ID 	= '$usuario_ID'")
	                                                    or die('error: '.mysqli_error($mysqli));

                
                    if ($query) {
                  
                        header("location: ../../main.php?modulo=usuarios&alert=2");
                    }
				}
		
				elseif (!empty($_POST['password_editar']) && empty($_FILES['foto_editar']['name'])) {
					
                    $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET nombre_completo 	= '$nombre_completo',
	                    													usuario 			= '$usuario',
	                    													password 			= '$password',
	                    													correo       		= '$correo',
	                    													perfil_ID   		= '$perfil_ID'
	                                                                  WHERE usuario_ID 			= '$usuario_ID'")
	                                                    or die('error : '.mysqli_error($mysqli));

             
                    if ($query) {
                    
                        header("location: ../../main.php?modulo=usuarios&alert=2");
                    }
				}
				
				elseif (empty($_POST['password_editar']) && !empty($_FILES['foto_editar']['name'])) {
			
					if (in_array($extension, $allowed_extensions)) {
	                
	                    if($ukuran_file <= 1000000) { 
	                        
	                        if(move_uploaded_file($tmp_file, $path_file)) { 
                        		
			                    $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET nombre_completo 	= '$nombre_completo',
				                    													usuario 			= '$usuario',
				                    													correo       		= '$correo',
				                    													foto 				= '$name_file',
				                    													perfil_ID  		 	= '$perfil_ID'
				                                                                  WHERE usuario_ID 			= '$usuario_ID'")
				                                                    or die('error : '.mysqli_error($mysqli));

			                    if ($query) {
			                    
			                        header("location: ../../main.php?modulo=usuarios&alert=2");
			                    }
                        	} else {
	                           
	                            header("location: ../../main.php?modulo=usuarios&alert=5");
	                        }
	                    } else {
	                       
	                        header("location: ../../main.php?modulo=usuarios&alert=6");
	                    }
	                } else {
	                   
	                    header("location: ../../main.php?modulo=usuarios&alert=7");
	                } 
				}
				
				else {
					
					if (in_array($extension, $allowed_extensions)) {
	                   
	                    if($ukuran_file <= 1000000) { 
	                       
	                        if(move_uploaded_file($tmp_file, $path_file)) { 
                        		
			                    $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET nombre_completo 	= '$nombre_completo',
				                    													usuario 			= '$usuario',
				                    													password    		= '$password',
				                    													correo       		= '$correo',
				                    													foto 				= '$name_file',
				                    													perfil_ID   		= '$perfil_ID'
				                                                                  WHERE usuario_ID 			= '$usuario_ID'")
				                                                    or die('error: '.mysqli_error($mysqli));

			                    
			                    if ($query) {
			                       
			                        header("location: ../../main.php?modulo=usuarios&alert=2");
			                    }
                        	} else {
	                            
	                            header("location: ../../main.php?modulo=usuarios&alert=5");
	                        }
	                    } else {
	                       
	                        header("location: ../../main.php?modulo=usuarios&alert=6");
	                    }
	                } else {
	                
	                    header("location: ../../main.php?modulo=usuarios&alert=7");
	                } 
				}
			}
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$usuario_ID = $_GET['id'];
			$estatus  = "1";

		
            $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET estatus_ID  = '$estatus'
                                                          WHERE usuario_ID = '$usuario_ID'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?modulo=usuarios&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$usuario_ID = $_GET['id'];
			$estatus  = "0";

		
            $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET estatus_ID  = '$estatus'
                                                          WHERE usuario_ID = '$usuario_ID'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?modulo=usuarios&alert=4");
            }
		}
	}		
}		
?>