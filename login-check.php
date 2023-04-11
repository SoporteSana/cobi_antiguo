
<?php

require_once "config/database.php";

$username = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['username_login'])))));
$password = md5(mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['password_login']))))));

if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	header("Location: index.php?alert=1");
}
else {

	// $query = mysqli_query($mysqli, "SELECT * FROM cat_usuarios WHERE usuario='$username' AND password='$password' AND estatus_ID='1'")
									// or die('error'.mysqli_error($mysqli));
	$query = mysqli_query($mysqli, "SELECT cat_usuarios.*, cat_perfiles.perfil 
										FROM cat_usuarios 
											INNER JOIN cat_perfiles ON cat_perfiles.perfil_ID = cat_usuarios.perfil_ID 
										WHERE usuario='$username' AND password='$password' AND estatus_ID='1'")
									or die('error'.mysqli_error($mysqli));
	$rows  = mysqli_num_rows($query);

	if ($rows > 0) {
		$data  = mysqli_fetch_assoc($query);

		session_start();
		$_SESSION['usuario_ID_sesion']   = $data['usuario_ID'];
		$_SESSION['usuario_sesion']  = $data['usuario'];
		$_SESSION['password_sesion']  = $data['password'];
		$_SESSION['nombre_completo_sesion'] = $data['nombre_completo'];
		$_SESSION['perfil_sesion'] = $data['perfil'];
	
		header("Location: main.php?modulo=start");
	}


	else {
		header("Location: index.php?alert=1");
	}
}
?>