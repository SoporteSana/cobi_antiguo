
<?php
// session_start();


include "../../config/database.php";

$tgl1     = $_POST['tgl_awal'];
$tgl2      = $_POST['tgl_akhir'];

if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='dinamico') {
		if (isset($_POST['tgl_awal'])) {
			    $no    = 1;
			    
			    $query = mysqli_query($mysqli, "SELECT * FROM `cat_registros` WHERE (`fecha` BETWEEN '$tgl1' AND '$tgl2')
			                                  AND estatus_ID ='3'
			                                    ORDER BY registro_ID ASC") 
			                                    or die('error '.mysqli_error($mysqli));
			    $count  = mysqli_num_rows($query);
			    if ($query) {
                header("location: ../main.php?modulo=reporte_dinamico&alert=1");
            }
			}
		}
	}		
?>