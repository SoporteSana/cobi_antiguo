

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="far fa-clipboard"></i> Agregar registro
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=registros"> Registro </a></li>
      <li class="active"> agregar </li>
    </ol>
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/registros/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">No. Económico:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad_registro_agregar" id="unidad_registro_agregar" autocomplete="off" required>
                  <input type="hidden" class="form-control" name="id_unidad_registro_agregar" id="id_unidad_registro_agregar" autocomplete="off" >
                </div>
              </div>

              <div class="form-group">  
                <label class="col-sm-2 control-label">Asignación:</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="asignacion_ID_registro_agregar" id="asignacion_ID_registro_agregar" data-placeholder="-- Seleccionar Asignación --" onchange="tampil_obat(this)" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_obat = mysqli_query($mysqli, "SELECT asignacion_ID, asignacion FROM cat_asignaciones ORDER BY asignacion DESC")
                                                            or die('error '.mysqli_error($mysqli));
                      while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                        echo"<option value=\"$data_obat[asignacion_ID]\"> $data_obat[asignacion_ID] | $data_obat[asignacion] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Semana:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="semana_registro_agregar" id="semana_registro_agregar" autocomplete="off" placeholder="<?php echo date("W"); ?>" value="<?php date_default_timezone_set('America/Mexico_City'); echo date("W"); ?>" readonly="">

                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Día:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="dia_registro_agregar" id="dia_registro_agregar" autocomplete="off" placeholder="<?php
                  $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                   echo $dias[date('w')];
                ?>" value="<?php
                  $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                   echo $dias[date('w')];
                ?>" readonly="">

                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="fecha_registro_agregar" id="fecha_registro_agregar" autocomplete="off" placeholder="<?php echo date('Y-m-d'); ?>" value="<?php date_default_timezone_set('America/Mexico_City'); echo date('Y-m-d'); ?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Hora de salida:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="hora_salida_registro_agregar" id="hora_salida_registro_agregar" autocomplete="off" placeholder="<?php echo date('Y-m-d'); ?>" value="<?php date_default_timezone_set('America/Mexico_City'); echo date('G:i:s'); ?>" readonly="">
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Supervisor:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="supervisor_registro_agregar" id="supervisor_registro_agregar" autocomplete="off" required>
                  <input type="hidden" class="form-control" name="id_supervisor_registro_agregar" id="id_supervisor_registro_agregar" autocomplete="off" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alias:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="alias_registro_agregar" id="alias_registro_agregar" autocomplete="off" required>
                  <input type="hidden" name="id_alias_registro_agregar" id="id_alias_registro_agregar" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Turno:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="turno_registro_agregar" id="turno_registro_agregar" autocomplete="off" required readonly="">
                  <input type="hidden" name="id_turno_registro_agregar" id="id_turno_registro_agregar" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Ruta:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ruta_registro_agregar" id="ruta_registro_agregar" autocomplete="off" required readonly="">
                  <input type="hidden" name="id_ruta_registro_agregar" id="id_ruta_registro_agregar" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Operador:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="operador_registro_agregar" id="operador_registro_agregar" autocomplete="off" required="">
                  <input type="hidden" name="id_operador_registro_agregar" id="id_operador_registro_agregar" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tripulantes:</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" min="1" name="tripulante_registro_agregar" id="tripulante_registro_agregar" autocomplete="off" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Km. de Salida:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" min="1" name="km_salida_registro_agregar" id="km_salida_registro_agregar" autocomplete="off" required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
              </div>
              <input type="hidden" name="alta_id_registro_agregar" id="alta_id_registro_agregar" value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=registros" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
  	if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT
                                            cat_registros.*,
                                            cat_turnos.turno,
                                            cat_rutas.ruta,
                                            cat_usuarios.usuario,
                                            cat_estatus_usuarios.estatus
                                        FROM
                                            cat_registros
                                        INNER JOIN cat_turnos ON cat_turnos.turno_ID = cat_registros.turno_ID
                                        INNER JOIN cat_rutas ON cat_rutas.ruta_ID = cat_registros.ruta_ID
                                        INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_registros.alta_ID
                                        INNER JOIN cat_estatus_usuarios ON cat_estatus_usuarios.estatus_ID = cat_registros.estatus_ID
                                        WHERE registros_ID='$_GET[id]'")
      
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

  <section class="content-header">
    <h1>
      <i class="far fa-clipboard"></i> Modificar datos de la registro
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?modulo=registros"> registro </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/registros/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="registros_ID_editar" value="<?php echo $data['registros_ID']; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Turno:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="turno_editar" id="turno_editar" autocomplete="off" value="<?php echo $data['turno']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Ruta:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ruta_editar" id="ruta_editar" autocomplete="off" value="<?php echo $data['ruta']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">registros:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="registros_editar" id="registros_editar" autocomplete="off" value="<?php echo $data['registros']; ?>" required>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=registros" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>