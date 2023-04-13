

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="far fa-clipboard"></i> Agregar registro
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=registros_vigilancia"> Registro </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/registros_vigilancia/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">No. Económico:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad_registro_agregar" id="unidad_registro_agregar" autocomplete="off" required>
                  <input type="hidden" class="form-control" name="id_unidad_registro_agregar" id="id_unidad_registro_agregar" autocomplete="off" >
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
                  <input type="text" class="form-control" name="hora_salida_registro_agregar" id="hora_salida_registro_agregar" autocomplete="off" placeholder="<?php echo date('Y-m-d'); ?>" value="<?php date_default_timezone_set('America/Mexico_City'); echo date('Y-m-d G:i:s'); ?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Hora del tablero:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" min="1" name="hora_recorridas_registro_agregar" id="hora_recorridas_registro_agregar" autocomplete="off" required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
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
<!--               <div class="form-group">
                <label class="col-sm-2 control-label">Tripulantes:</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" min="1" name="tripulante_registro_agregar" id="tripulante_registro_agregar" autocomplete="off" required="">
                </div>
              </div> -->
              <div class="form-group">  
                <label class="col-sm-2 control-label">Recolectores:</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="recolector_registro_agregar" id="recolector_registro_agregar" data-placeholder="-- Seleccionar cantidad recolectores --" onchange="mostrar_recolectores(this.value);" autocomplete="off" required="">
                    <option value="0" selected="" disabled=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
              <div class="form-group" style="display: none;" id="recolector_uno">
                <label class="col-sm-2 control-label"><b>Recolector 1:</b>:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="recolector_uno_agregar" id="recolector_uno_agregar" autocomplete="off" required="">
                  <!-- <input type="hidden" class="tiros" name="peso_recolector_uno_agregar" id="peso_recolector_uno_agregar" > -->
                  <input type="hidden" name="id_recolector_uno_agregar" id="id_recolector_uno_agregar" value="0">
                </div>
              </div>
              <div class="form-group" style="display: none;" id="recolector_dos">
                <label class="col-sm-2 control-label"><b>Recolector 2:</b>:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="recolector_dos_agregar" id="recolector_dos_agregar" autocomplete="off">
                  <!-- <input type="hidden" class="tiros" name="peso_recolector_dos_agregar" id="peso_recolector_dos_agregar" > -->
                  <input type="hidden" name="id_recolector_dos_agregar" id="id_recolector_dos_agregar" value="0">
                </div>
              </div>
              <div class="form-group" style="display: none;" id="recolector_tres">
                <label class="col-sm-2 control-label"><b>Recolector 3:</b>:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="recolector_tres_agregar" id="recolector_tres_agregar" autocomplete="off">
                  <!-- <input type="hidden" class="tiros" name="peso_recolector_tres_agregar" id="peso_recolector_tres_agregar" > -->
                  <input type="hidden" name="id_recolector_tres_agregar" id="id_recolector_tres_agregar" value="0">
                </div>
              </div>
              <div class="form-group" style="display: none;" id="recolector_cuatro">
                <label class="col-sm-2 control-label"><b>Recolector 4:</b>:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="recolector_cuatro_agregar" id="recolector_cuatro_agregar" autocomplete="off">
                  <!-- <input type="hidden" class="tiros" name="peso_recolector_cuatro_agregar" id="peso_recolector_cuatro_agregar" > -->
                  <input type="hidden" name="id_recolector_cuatro_agregar" id="id_recolector_cuatro_agregar" value="0">
                </div>
              </div>
              <div class="form-group" style="display: none;" id="recolector_cinco">
                <label class="col-sm-2 control-label"><b>Recolector 5:</b>:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="recolector_cinco_agregar" id="recolector_cinco_agregar" autocomplete="off">
                  <!-- <input type="hidden" class="tiros" name="peso_recolector_cinco_agregar" id="peso_recolector_cinco_agregar" > -->
                  <input type="hidden" name="id_recolector_cinco_agregar" id="id_recolector_cinco_agregar" value="0">
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
                  <a href="?modulo=registros_vigilancia" class="btn btn-default btn-reset">Cancelar</a>
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
                                          cat_unidades.unidad,
                                          cat_turnos.turno,
                                          cat_rutas.ruta,
                                          cat_alias.alias,
                                          cat_operadores.nombre_completo AS operador,
                                          cat_usuarios.usuario,
                                          R1.nombre_completo AS Recolector_1,
                                          R2.nombre_completo AS Recolector_2,
                                          R3.nombre_completo AS Recolector_3,
                                          R4.nombre_completo AS Recolector_4,
                                          R5.nombre_completo AS Recolector_5,
                                          cat_estatus_registro.estatus
                                      FROM
                                          cat_registros
                                      INNER JOIN cat_unidades ON cat_unidades.unidad_ID = cat_registros.unidad_ID
                                      INNER JOIN cat_turnos ON cat_turnos.turno_ID = cat_registros.turno_ID
                                      INNER JOIN cat_rutas ON cat_rutas.ruta_ID = cat_registros.ruta_ID
                                      INNER JOIN cat_alias ON cat_alias.alias_ID = cat_registros.alias_ID
                                      INNER JOIN cat_operadores ON cat_operadores.operador_ID = cat_registros.operador_ID
                                      INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_registros.alta_ID
                                      INNER JOIN cat_estatus_registro ON cat_estatus_registro.estatus_ID = cat_registros.estatus_ID
                                      INNER JOIN cat_recolectores R1 ON R1.recolector_ID = cat_registros.recolector_1_ID
                                      INNER JOIN cat_recolectores R2 ON R2.recolector_ID = cat_registros.recolector_2_ID
                                      INNER JOIN cat_recolectores R3 ON R3.recolector_ID = cat_registros.recolector_3_ID
                                      INNER JOIN cat_recolectores R4 ON R4.recolector_ID = cat_registros.recolector_4_ID
                                      INNER JOIN cat_recolectores R5 ON R5.recolector_ID = cat_registros.recolector_5_ID
                                      WHERE
                                          registro_ID='$_GET[id]'")
      
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

  <section class="content-header">
    <h1>
      <i class="far fa-clipboard"></i> Finalizar el registro # <?php echo $data['registro_ID']; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?modulo=registros_vigilancia"> Registros </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/registros_vigilancia/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="registro_ID_registro_finalizar" id="registro_ID_registro_finalizar" value="<?php echo $data['registro_ID']; ?>">
              <input type="hidden" name="modificacion_ID_registro_finalizar" id="modificacion_ID_registro_finalizar" value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Unidad:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['unidad']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Semana:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['ruta']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Día:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['dia']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['fecha']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Hora de salida:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['hora_salida']; ?>" readonly>
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Horas de tablero:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['hora_recorridas']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Turno:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['turno']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Ruta:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['ruta']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alias:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['alias']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Operador:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['operador']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Recolectores:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['tripulantes']; ?>" readonly>
                </div>
              </div>
              <?php 
                  if ($data['tripulantes']=='1') { ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 1:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_1']; ?>" readonly>
                      </div>
                    </div>
                  <?php }
               ?>
               <?php 
                  if ($data['tripulantes']=='2') { ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 1:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_1']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 2:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_2']; ?>" readonly>
                      </div>
                    </div>
                  <?php }
               ?>
               <?php 
                  if ($data['tripulantes']=='3') { ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 1:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_1']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 2:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_2']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 3:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_3']; ?>" readonly>
                      </div>
                    </div>
                  <?php }
               ?>
              <?php 
                  if ($data['tripulantes']=='4') { ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 1:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_1']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 2:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_2']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 3:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_3']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 4:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_4']; ?>" readonly>
                      </div>
                    </div>
                  <?php }
               ?>
              <?php 
                  if ($data['tripulantes']=='4') { ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 1:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_1']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 2:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_2']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 3:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_3']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 4:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_4']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Recolector 5:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['Recolector_5']; ?>" readonly>
                      </div>
                    </div>
                  <?php }
               ?>
              
              
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Km. de salida:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="" id="" autocomplete="off" value="<?php echo $data['km_salida']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b><i class="far fa-clock"></i> Hora de entrada:</b></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="hora_entrada_registro_finalizar" id="hora_entrada_registro_finalizar" autocomplete="off" placeholder="<?php echo date('Y-m-d'); ?>" value="<?php date_default_timezone_set('America/Mexico_City'); echo date('Y-m-d G:i:s'); ?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b><i class="fas fa-tachometer-alt"></i> Km. de entrada:</b></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" min="1" name="km_entrada_registro_finalizar" id="km_entrada_registro_finalizar" autocomplete="off" required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=registros_vigilancia" class="btn btn-default btn-reset">Cancelar</a>
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