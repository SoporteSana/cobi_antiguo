<?php 
// PERFIL DE SISTEMAS
if ($_SESSION['perfil_sesion']=='Sistemas') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENÚ</li>

	<?php 

	if ($_GET["modulo"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php


// REGISTRO_SISTEMAS



// REGISTRO VIGILANCIA SISTEMAS
if ($_GET["modulo"]=="registros_vigilancia" || $_GET["modulo"]=="form_registros_vigilancia") { ?>
    <li class="active">
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros VIGILANCIA</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros VIGILANCIA</a>
      </li>
  <?php
  }

// REGISTRO SUPERVISION SISTEMAS
if ($_GET["modulo"]=="registros_supervision" || $_GET["modulo"]=="form_registros_supervision") { ?>
    <li class="active">
      <a href="?modulo=registros_supervision"><i class="fas fa-clipboard-list"></i> Registros SUPERVISION</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=registros_supervision"><i class="fas fa-clipboard-list"></i> Registros SUPERVISION</a>
      </li>
  <?php
  }

// SUPERVISORES
  if ($_GET["modulo"]=="supervisores" || $_GET["modulo"]=="form_supervisores") { ?>
    <li class="active">
      <a href="?modulo=supervisores"><i class="fas fa-user-tie"></i> Supervisores </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=supervisores"><i class="fas fa-user-tie"></i> Supervisores </a>
      </li>
  <?php
  }


// TURNOS
  if ($_GET["modulo"]=="turnos" || $_GET["modulo"]=="form_turnos") { ?>
    <li class="active">
      <a href="?modulo=turnos"><i class="far fa-clock"></i> Turnos</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=turnos"><i class="far fa-clock"></i> Turnos</a>
      </li>
  <?php
  }


// RUTAS
if ($_GET["modulo"]=="rutas" || $_GET["modulo"]=="form_rutas") { ?>
    <li class="active">
      <a href="?modulo=rutas"><i class="fas fa-route"></i> Rutas</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=rutas"><i class="fas fa-route"></i> Rutas</a>
      </li>
  <?php
  }



// ALIAS
if ($_GET["modulo"]=="alias" || $_GET["modulo"]=="form_alias") { ?>
    <li class="active">
      <a href="?modulo=alias"><i class="fas fa-road"></i> Rutas-Alias</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=alias"><i class="fas fa-road"></i> Rutas-Alias</a>
      </li>
  <?php
  }


// OPERADORES
if ($_GET["modulo"]=="operadores" || $_GET["modulo"]=="form_operadores") { ?>
    <li class="active">
      <a href="?modulo=operadores"><i class="fas fa-walking"></i> Operadores</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=operadores"><i class="fas fa-walking"></i> Operadores</a>
      </li>
  <?php
  }

// RECOLECTORES
if ($_GET["modulo"]=="recolectores" || $_GET["modulo"]=="form_recolectores") { ?>
    <li class="active">
      <a href="?modulo=recolectores"><i class="fas fa-people-carry"></i> Recolectores</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=recolectores"><i class="fas fa-people-carry"></i> Recolectores</a>
      </li>
  <?php
  }


// UNIDADES
if ($_GET["modulo"]=="unidades" || $_GET["modulo"]=="form_unidades") { ?>
    <li class="active">
      <a href="?modulo=unidades"><i class="fas fa-truck-moving"></i> Unidades</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=unidades"><i class="fas fa-truck-moving"></i> Unidades</a>
      </li>
  <?php
  }


// DESTINOS FINALES SISTEMAS
if ($_GET["modulo"]=="destino_final" || $_GET["modulo"]=="form_destino_final") { ?>
  <li class="active">
    <a href="?modulo=destino_final"><i class="fas fa-map-marked-alt"></i> Destino Final</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="?modulo=destino_final"><i class="fas fa-map-marked-alt"></i> Destino Final</a>
    </li>
<?php
}

// TICKETS SISTEMAS
if ($_GET["modulo"]=="tickets" || $_GET["modulo"]=="form_tickets") { ?>
    <li class="active">
      <a href="?modulo=tickets"><i class="fas fa-ticket-alt"></i> Tickets</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=tickets"><i class="fas fa-ticket-alt"></i> Tickets</a>
      </li>
  <?php
  }




//reportes
	if ($_GET["modulo"]=="reporte_normal") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
        		<li><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
      		</ul>
    	</li>
    <?php
	}

	elseif ($_GET["modulo"]=="reporte_dinamico") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
        		<li class="active"><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
      		</ul>
    	</li>
    <?php
	}
  elseif ($_GET["modulo"]=="reporte_rendimiento") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class="active"><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["modulo"]=="reporte_2km") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class="active"><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_tonelaje") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class="active"><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_horas_ruta") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class="active"><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }


	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
        		<li><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
      		</ul>
    	</li>
    <?php
	}

// ADMINSTRAR USUARIOS
	if ($_GET["modulo"]=="usuarios" || $_GET["modulo"]=="form_usuario") { ?>
		<li class="active">
			<a href="?modulo=usuarios"><i class="fas fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?modulo=usuarios"><i class="fas fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}
// CAMBIAR CONTRASEÑA
	if ($_GET["modulo"]=="password") { ?>
		<li class="active">
			<a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}




///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
elseif ($_SESSION['perfil_sesion']=='Vigilancia') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["modulo"]=="start") { ?>
		<li class="active">
			<a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}

// REGISTRO VIGILANCIA
if ($_GET["modulo"]=="registros_vigilancia" || $_GET["modulo"]=="form_registros_vigilancia") { ?>
    <li class="active">
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros</a>
      </li>
  <?php
  }


// CAMBIAR CONTRASEÑA
  if ($_GET["modulo"]=="password") { ?>
    <li class="active">
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  ?>
  </ul>

<?php
}


///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////// ADMINISTRACIÓN
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
elseif ($_SESSION['perfil_sesion']=='Administración') { ?>
  <!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

  <?php 

  if ($_GET["modulo"]=="start") { ?>
    <li class="active">
      <a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  
//reportes
  if ($_GET["modulo"]=="reporte_normal") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_dinamico") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class="active"><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["modulo"]=="reporte_rendimiento") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class="active"><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["modulo"]=="reporte_2km") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class="active"><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_tonelaje") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class="active"><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_horas_ruta") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class="active"><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }


  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }


// CAMBIAR CONTRASEÑA
  if ($_GET["modulo"]=="password") { ?>
    <li class="active">
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  ?>
  </ul>

<?php
}





///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////// RECURSOS HUMANOS
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
elseif ($_SESSION['perfil_sesion']=='Recursos Humanos') { ?>
  <!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

  <?php 

  if ($_GET["modulo"]=="start") { ?>
    <li class="active">
      <a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }
if ($_GET["modulo"]=="registros_vigilancia" || $_GET["modulo"]=="form_registros_vigilancia") { ?>
    <li class="active">
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros VIGILANCIA</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros VIGILANCIA</a>
      </li>
  <?php
  }

// OPERADORES
if ($_GET["modulo"]=="operadores" || $_GET["modulo"]=="form_operadores") { ?>
    <li class="active">
      <a href="?modulo=operadores"><i class="fas fa-walking"></i> Operadores</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=operadores"><i class="fas fa-walking"></i> Operadores</a>
      </li>
  <?php
  }

// RECOLECTORES
if ($_GET["modulo"]=="recolectores" || $_GET["modulo"]=="form_recolectores") { ?>
    <li class="active">
      <a href="?modulo=recolectores"><i class="fas fa-people-carry"></i> Recolectores</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=recolectores"><i class="fas fa-people-carry"></i> Recolectores</a>
      </li>
  <?php
  }

  
//reportes
  if ($_GET["modulo"]=="reporte_normal") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_dinamico") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class="active"><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["modulo"]=="reporte_rendimiento") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class="active"><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["modulo"]=="reporte_2km") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class="active"><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_tonelaje") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class="active"><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class=""><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }

  elseif ($_GET["modulo"]=="reporte_horas_ruta") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li class=""><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li class=""><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li class=""><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li class=""><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li class="active"><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }


  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fas fa-file-alt"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Completo </a></li>
            <li><a href="?modulo=reporte_dinamico"><i class="far fa-circle"></i> Filtros </a></li>
            <li><a href="?modulo=reporte_rendimiento"><i class="far fa-circle"></i> Rendimiento </a></li>
            <li><a href="?modulo=reporte_2km"><i class="far fa-circle"></i> 2km/lt </a></li>
            <li><a href="?modulo=reporte_tonelaje"><i class="far fa-circle"></i> Tonelaje </a></li>
            <li><a href="?modulo=reporte_horas_ruta"><i class="far fa-circle"></i> Horas-ruta </a></li>
          </ul>
      </li>
    <?php
  }


// CAMBIAR CONTRASEÑA
  if ($_GET["modulo"]=="password") { ?>
    <li class="active">
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  ?>
  </ul>

<?php
}





///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
if ($_SESSION['perfil_sesion']=='Supervisión') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

  if ($_GET["modulo"]=="start") { ?>
    <li class="active">
      <a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }
// REGISTRO VIGILANCIA
if ($_GET["modulo"]=="registros_vigilancia" || $_GET["modulo"]=="form_registros_vigilancia") { ?>
    <li class="active">
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros Vigilancia</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=registros_vigilancia"><i class="far fa-clipboard"></i> Registros Vigilancia</a>
      </li>
  <?php
  }

// REGISTRO SUPERVISION
if ($_GET["modulo"]=="registros_supervision" || $_GET["modulo"]=="form_registros_supervision") { ?>
    <li class="active">
      <a href="?modulo=registros_supervision"><i class="fas fa-clipboard-list"></i> Finalizar Registros</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=registros_supervision"><i class="fas fa-clipboard-list"></i> Finalizar Registros</a>
      </li>
  <?php
  }

  // DESTINOS FINALES SUPERVISION
if ($_GET["modulo"]=="destino_final" || $_GET["modulo"]=="form_destino_final") { ?>
  <li class="active">
    <a href="?modulo=destino_final"><i class="fas fa-map-marked-alt"></i> Destino Final</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="?modulo=destino_final"><i class="fas fa-map-marked-alt"></i> Destino Final</a>
    </li>
<?php
}



// TICKETS SUPERVISION
if ($_GET["modulo"]=="tickets" || $_GET["modulo"]=="form_tickets") { ?>
    <li class="active">
      <a href="?modulo=tickets"><i class="fas fa-ticket-alt"></i> Tickets</a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=tickets"><i class="fas fa-ticket-alt"></i> Tickets</a>
      </li>
  <?php
  }


if ($_GET["modulo"]=="reporte_normal") { ?>
    <li class="active">
      <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Reporte completo </a></li>
      </li>
  <?php
  }

  else { ?>
    <li>
      <li><a href="?modulo=reporte_normal"><i class="far fa-circle"></i> Reporte completo </a></li>
      </li>
  <?php
  }



//CAMBIAR CONTRASEÑA SUPERVISION
	if ($_GET["modulo"]=="password") { ?>
    <li class="active">
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?modulo=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
    </li>
  <?php
  }
  ?>
  </ul>
<?php
}
?>