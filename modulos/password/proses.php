
<?php
session_start();

require_once "../../config/database.php";


if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if (isset($_POST['Guardar'])) {
        if (isset($_SESSION['usuario_ID_sesion'])) {
    
            $password_antiguo           = md5(mysqli_real_escape_string($mysqli, trim($_POST['password_antiguo_editar'])));
            $password_nuevo             = md5(mysqli_real_escape_string($mysqli, trim($_POST['password_nuevo_editar'])));
            $password_nuevo_repetir     = md5(mysqli_real_escape_string($mysqli, trim($_POST['password_nuevo_repetir_editar'])));
            $usuario_ID = $_SESSION['usuario_ID_sesion'];


            $sql = mysqli_query($mysqli, "SELECT password FROM cat_usuarios WHERE usuario_ID=$usuario_ID")
                                          or die('error: '.mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($sql);

         
            if ($password_antiguo != $data['password']){
                header("Location: ../../main.php?modulo=password&alert=1");
            }

          
            else {

                
                if ($password_nuevo != $password_nuevo_repetir){
                        header("Location: ../../main.php?modulo=password&alert=2");
                }

               
                else {
                   
                    $query = mysqli_query($mysqli, "UPDATE cat_usuarios SET password = '$password_nuevo'
                                                                  WHERE usuario_ID  = '$usuario_ID'")
                                                    or die('error : '.mysqli_error($mysqli));   

                   
                    if ($query) {
                        
                        header("location: ../../main.php?modulo=password&alert=3");
                    }   
                }
            }
        }
    }   
}               
?>