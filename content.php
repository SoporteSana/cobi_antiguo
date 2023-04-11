<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['usuario_sesion']) && empty($_SESSION['password_sesion'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['modulo'] == 'start') {
		include "modulos/start/view.php";
	}

// REGISTRO SISTEMAS
	elseif ($_GET['modulo'] == 'registros') {
		include "modulos/registros/view.php";
	}

	elseif ($_GET['modulo'] == 'form_registros') {
		include "modulos/registros/form.php";
	}

// REGISTRO VIGILANCIA
	elseif ($_GET['modulo'] == 'registros_vigilancia') {
		include "modulos/registros_vigilancia/view.php";
	}

	elseif ($_GET['modulo'] == 'form_registros_vigilancia') {
		include "modulos/registros_vigilancia/form.php";
	}


// REGISTRO VIGILANCIA
	elseif ($_GET['modulo'] == 'registros_supervision') {
		include "modulos/registros_supervision/view.php";
	}

	elseif ($_GET['modulo'] == 'form_registros_supervision') {
		include "modulos/registros_supervision/form.php";
	}


// SUPERVISORES
	elseif ($_GET['modulo'] == 'supervisores') {
		include "modulos/supervisores/view.php";
	}

	elseif ($_GET['modulo'] == 'form_supervisores') {
		include "modulos/supervisores/form.php";
	}


// TURNOS
	elseif ($_GET['modulo'] == 'turnos') {
		include "modulos/turnos/view.php";
	}

	elseif ($_GET['modulo'] == 'form_turnos') {
		include "modulos/turnos/form.php";
	}


// RUTAS
	elseif ($_GET['modulo'] == 'rutas') {
		include "modulos/rutas/view.php";
	}

	elseif ($_GET['modulo'] == 'form_rutas') {
		include "modulos/rutas/form.php";
	}


// ALIAS
	elseif ($_GET['modulo'] == 'alias') {
		include "modulos/alias/view.php";
	}

	elseif ($_GET['modulo'] == 'form_alias') {
		include "modulos/alias/form.php";
	}


// OPERADORES
	elseif ($_GET['modulo'] == 'operadores') {
		include "modulos/operadores/view.php";
	}

	elseif ($_GET['modulo'] == 'form_operadores') {
		include "modulos/operadores/form.php";
	}	

// RECOLECTORES
	elseif ($_GET['modulo'] == 'recolectores') {
		include "modulos/recolectores/view.php";
	}

	elseif ($_GET['modulo'] == 'form_recolectores') {
		include "modulos/recolectores/form.php";
	}


// UNIDADES
	elseif ($_GET['modulo'] == 'unidades') {
		include "modulos/unidades/view.php";
	}

	elseif ($_GET['modulo'] == 'form_unidades') {
		include "modulos/unidades/form.php";
	}


// DESTINO FINAL
elseif ($_GET['modulo'] == 'destino_final') {
	include "modulos/destino_final/view.php";
}

elseif ($_GET['modulo'] == 'form_destino_final') {
	include "modulos/destino_final/form.php";
}

// TICKETS
	elseif ($_GET['modulo'] == 'tickets') {
		include "modulos/tickets/view.php";
	}

	elseif ($_GET['modulo'] == 'form_tickets') {
		include "modulos/tickets/form.php";
	}



// REPORTE COMPLETO
	elseif ($_GET['modulo'] == 'reporte_normal') {
		include "modulos/reporte_normal/view.php";
	}

	elseif ($_GET['modulo'] == 'form_reporte_normal') {
		include "modulos/reporte_normal/form.php";
	}




// REPORTE dinamico
	elseif ($_GET['modulo'] == 'reporte_dinamico') {
		include "modulos/reporte_dinamico/view.php";
	}

	elseif ($_GET['modulo'] == 'form_reporte_dinamico') {
		include "modulos/reporte_dinamico/form.php";
	}
	elseif ($_GET['modulo'] == 'form') {
		include "modulos/reporte_dinamico/form.php";
	}



// REPORTE RENDIMIENTO
	elseif ($_GET['modulo'] == 'reporte_rendimiento') {
		include "modulos/reporte_rendimiento/view.php";
	}

	elseif ($_GET['modulo'] == 'form_reporte_rendimiento') {
		include "modulos/reporte_rendimiento/form.php";
	}
	elseif ($_GET['modulo'] == 'form') {
		include "modulos/reporte_rendimiento/form.php";
	}



// REPORTE 2KM/LITRO
	elseif ($_GET['modulo'] == 'reporte_2km') {
		include "modulos/reporte_2km/view.php";
	}

	elseif ($_GET['modulo'] == 'form_reporte_2km') {
		include "modulos/reporte_2km/form.php";
	}
	elseif ($_GET['modulo'] == 'form') {
		include "modulos/reporte_2km/form.php";
	}


// REPORTE TONELAJE
	elseif ($_GET['modulo'] == 'reporte_tonelaje') {
		include "modulos/reporte_tonelaje/view.php";
	}

	elseif ($_GET['modulo'] == 'form_reporte_tonelaje') {
		include "modulos/reporte_tonelaje/form.php";
	}
	elseif ($_GET['modulo'] == 'form') {
		include "modulos/reporte_tonelaje/form.php";
	}

// REPORTE HORAS_RUTA
	elseif ($_GET['modulo'] == 'reporte_horas_ruta') {
		include "modulos/reporte_horas_ruta/view.php";
	}

	elseif ($_GET['modulo'] == 'form_reporte_horas_ruta') {
		include "modulos/reporte_horas_ruta/form.php";
	}
	elseif ($_GET['modulo'] == 'form') {
		include "modulos/reporte_horas_ruta/form.php";
	}



// REPORTE DINAMICO
	// elseif ($_GET['modulo'] == 'form_reporte_dinamico') {
	// 	include "modulos/reporte_dinamico/view.php";
	// }
	// elseif ($_GET['modulo'] == 'reporte_dinamico') {
	// 	include "modulos/reporte_dinamico/form.php";
	// }


//USUARIOS 
	elseif ($_GET['modulo'] == 'usuarios') {
		include "modulos/usuarios/view.php";
	}
	elseif ($_GET['modulo'] == 'form_usuario') {
		include "modulos/usuarios/form.php";
	}

//PERFIL
	elseif ($_GET['modulo'] == 'perfil') {
		include "modulos/perfil/view.php";
		}

	elseif ($_GET['modulo'] == 'form_perfil') {
		include "modulos/perfil/form.php";
	}

//PASSWORD
	elseif ($_GET['modulo'] == 'password') {
		include "modulos/password/view.php";
	}
}
?>