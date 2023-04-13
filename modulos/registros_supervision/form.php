<?php  

if ($_GET['form']=='add') { ?>

<section class="content-header">
    <h1>
        <i class="far fa-clipboard"></i> Agregar registro
    </h1>
    <ol class="breadcrumb">
        <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
        <li><a href="?modulo=registros_supervision"> Registro </a></li>
        <li class="active"> Agregar </li>
    </ol>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <!-- form start -->
            </div><!-- /.box -->
        </div>
        <!--/.col -->
    </div> <!-- /.row -->
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
                                        WHERE registro_ID='$_GET[id]'")
      
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

<section class="content-header">
    <h1>
        <i class="far fa-clipboard"></i> Llenar campos adicionales del registro # <?php echo $data['registro_ID']; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="?modulo=registros_supervision"> Registros </a></li>
        <li class="active"> Modificar </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" class="form-horizontal" method="POST"
                    action="modulos/registros_supervision/proses.php?act=update" enctype="multipart/form-data">
                    <div class="box-body">

                        <input type="hidden" name="registro_ID_registro_finalizar" id="registro_ID_registro_finalizar"
                            value="<?php echo $data['registro_ID']; ?>">
                        <input type="hidden" name="modificacion_ID_registro_finalizar"
                            id="modificacion_ID_registro_finalizar"
                            value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-hand-pointer"></i>
                                    Asignación:</b></label>
                            <div class="col-sm-5">
                                <select class="chosen-select" name="asignacion_ID_supervision_agregar"
                                    id="asignacion_ID_supervision_agregar"
                                    data-placeholder="-- Seleccionar Asignación --" onchange="tampil_obat(this)"
                                    autocomplete="off" required>
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
                            <label class="col-sm-2 control-label"><b><i class="fas fa-user-shield"></i>
                                    Supervisor:</b></label>
                            <div class="col-sm-5">
                                <input type="text" readonly="" class="form-control" name="supervisor_registro_agregar"
                                    id="supervisor_registro_agregar" autocomplete="off"
                                    value="<?php echo $_SESSION['nombre_completo_sesion']; ?>">
                                <input type="hidden" class="form-control" name="id_supervisor_registro_agregar"
                                    id="id_supervisor_registro_agregar"
                                    value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Unidad:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['unidad']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Semana:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['semana']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Día:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['dia']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['fecha']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hora de salida:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="inicio" autocomplete="off"
                                    value="<?php echo $data['hora_salida']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hora de entrada:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="fin" autocomplete="off"
                                    value="<?php echo $data['hora_entrada']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Horas de tablero:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['hora_recorridas']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-clock"></i> Tiempo en
                                    ruta:</b></label>
                            <!--                 <input class="col btn btn-warning" type="button" onclick="restarHoras();" value="Calcular"> -->
                            <div class="col-sm-5">

                                <input type="text" class="form-control" name="tiempo_ruta" id="tiempo_ruta"
                                    autocomplete="off" readonly="" required="" value="<?php 
                          $fecha1 = new DateTime($data['hora_entrada']);//fecha inicial
                          $fecha2 = new DateTime($data['hora_salida']);//fecha de cierre
                          $intervalo = $fecha1->diff($fecha2);
                          echo $intervalo->format('%H:%i:%s');

                           ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Turno:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['turno']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ruta:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['ruta']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alias:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['alias']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Operador:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['operador']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolectores:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['tripulantes']; ?>" readonly>
                            </div>
                        </div>
                        <?php 
                  if ($data['tripulantes']=='1') { ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 1:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_1']; ?>" readonly>
                            </div>
                        </div>
                        <?php }
               ?>
                        <?php 
                  if ($data['tripulantes']=='2') { ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 1:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_1']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 2:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_2']; ?>" readonly>
                            </div>
                        </div>
                        <?php }
               ?>
                        <?php 
                  if ($data['tripulantes']=='3') { ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 1:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_1']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 2:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_2']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 3:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_3']; ?>" readonly>
                            </div>
                        </div>
                        <?php }
               ?>
                        <?php 
                  if ($data['tripulantes']=='4') { ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 1:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_1']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 2:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_2']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 3:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_3']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 4:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_4']; ?>" readonly>
                            </div>
                        </div>
                        <?php }
               ?>
                        <?php 
                  if ($data['tripulantes']=='4') { ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 1:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_1']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 2:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_2']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 3:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_3']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 4:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_4']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Recolector 5:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="" id="" autocomplete="off"
                                    value="<?php echo $data['Recolector_5']; ?>" readonly>
                            </div>
                        </div>
                        <?php }
               ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Km. de salida:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="km_salida" id="km_salida"
                                    autocomplete="off" value="<?php echo $data['km_salida']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Km. de entrada:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="km_entrada" id="km_entrada"
                                    autocomplete="off" value="<?php echo $data['km_entrada']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-road"></i> Recorrido:</b></label>
                            <input class="col btn btn-warning" type="button" onclick="restar_Recorrido();"
                                value="Calcular">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="km_recorrido" id="km_recorrido"
                                    autocomplete="off" readonly="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-gas-pump"></i> Litros
                                    cargados:</b></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="litros_cargados" id="litros_cargados"
                                    autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-chart-line"></i>
                                    Rendimiento:</b></label>
                            <input class="col btn btn-warning" type="button" onclick="calcular_rendimiento();"
                                value="Calcular">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="total_rendimiento" id="total_rendimiento"
                                    autocomplete="off" readonly="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-list-ol"></i> Cantidad de
                                    tiros:</b></label>
                            <div class="col-sm-5">
                                <select class="chosen-select" name="viajes_total" id="viajes_total"
                                    data-placeholder="-- Seleccionar Cantidad --"
                                    onchange="mostrar_tickets(this.value);" autocomplete="off" required="">
                                    <option value="0" selected="" disabled=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_uno">
                            <label class="col-sm-2 control-label"><b>Tiro 1 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_uno_agregar"
                                    id="tiro_uno_agregar" autocomplete="off" required="" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_uno_agregar" id="id_folio_tiro_uno_agregar" value="0">
                                <input type="hidden" name="tiro_1_folio_ticket" id="tiro_1_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_uno_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 1:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_uno_agregar"
                                    id="destino_final_tiro_uno_agregar" required="">
                                <input type="hidden" name="id_destino_final_tiro_uno_agregar"
                                    id="id_destino_final_tiro_uno_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_1" id="name_destino_final_tiro_1">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;" id="tiro_dos">
                            <label class="col-sm-2 control-label"><b>Tiro 2 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_dos_agregar"
                                    id="tiro_dos_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_dos_agregar" id="id_folio_tiro_dos_agregar" value="0">
                                <input type="hidden" name="tiro_2_folio_ticket" id="tiro_2_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_dos_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 2:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_dos_agregar"
                                    id="destino_final_tiro_dos_agregar">
                                <input type="hidden" name="id_destino_final_tiro_dos_agregar"
                                    id="id_destino_final_tiro_dos_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_2" id="name_destino_final_tiro_2">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;" id="tiro_tres">
                            <label class="col-sm-2 control-label"><b>Tiro 3 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_tres_agregar"
                                    id="tiro_tres_agregar" autocomplete="off" onkeyup="sumar_tickets();">

                                <input type="hidden" name="id_folio_tiro_tres_agregar" id="id_folio_tiro_tres_agregar" value="0">
                                <input type="hidden" name="tiro_3_folio_ticket" id="tiro_3_folio_ticket" value="0">

                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_tres_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 3:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_tres_agregar"
                                    id="destino_final_tiro_tres_agregar">
                                <input type="hidden" name="id_destino_final_tiro_tres_agregar"
                                    id="id_destino_final_tiro_tres_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_3" id="name_destino_final_tiro_3">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;" id="tiro_cuatro">
                            <label class="col-sm-2 control-label"><b>Tiro 4 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_cuatro_agregar"
                                    id="tiro_cuatro_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_cuatro_agregar"
                                    id="id_folio_tiro_cuatro_agregar" value="0">
                                <input type="hidden" name="tiro_4_folio_ticket" id="tiro_4_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_cuatro_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 4:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_cuatro_agregar"
                                    id="destino_final_tiro_cuatro_agregar">
                                <input type="hidden" name="id_destino_final_tiro_cuatro_agregar"
                                    id="id_destino_final_tiro_cuatro_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_4" id="name_destino_final_tiro_4">
                            </div>
                        </div>


                        <div class="form-group" style="display: none;" id="tiro_cinco">
                            <label class="col-sm-2 control-label"><b>Tiro 5 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_cinco_agregar"
                                    id="tiro_cinco_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_cinco_agregar"
                                    id="id_folio_tiro_cinco_agregar" value="0">
                                <input type="hidden" name="tiro_5_folio_ticket" id="tiro_5_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_cinco_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 5:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_cinco_agregar"
                                    id="destino_final_tiro_cinco_agregar">
                                <input type="hidden" name="id_destino_final_tiro_cinco_agregar"
                                    id="id_destino_final_tiro_cinco_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_5" id="name_destino_final_tiro_5">
                            </div>
                        </div>

                        <!-- ACTUALIZACIONES ANGEL 2021 -->
                        <div class="form-group" style="display: none;" id="tiro_seis">
                            <label class="col-sm-2 control-label"><b>Tiro 6 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_seis_agregar"
                                    id="tiro_seis_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_seis_agregar" id="id_folio_tiro_seis_agregar" value="0">
                                <input type="hidden" name="tiro_6_folio_ticket" id="tiro_6_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_seis_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 6:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_seis_agregar"
                                    id="destino_final_tiro_seis_agregar">
                                <input type="hidden" name="id_destino_final_tiro_seis_agregar"
                                    id="id_destino_final_tiro_seis_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_6" id="name_destino_final_tiro_6">
                            </div>
                        </div>


                        <div class="form-group" style="display: none;" id="tiro_siete">
                            <label class="col-sm-2 control-label"><b>Tiro 7 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_siete_agregar"
                                    id="tiro_siete_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_siete_agregar"
                                    id="id_folio_tiro_siete_agregar" value="0">
                                <input type="hidden" name="tiro_7_folio_ticket" id="tiro_7_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_siete_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 7:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_siete_agregar"
                                    id="destino_final_tiro_siete_agregar">
                                <input type="hidden" name="id_destino_final_tiro_siete_agregar"
                                    id="id_destino_final_tiro_siete_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_7" id="name_destino_final_tiro_7">
                            </div>
                        </div>

                        <!-- actualizacion noviembre 2021 - cantidad de tiros 10 -->
                        <div class="form-group" style="display: none;" id="tiro_ocho">
                            <label class="col-sm-2 control-label"><b>Tiro 8 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_ocho_agregar"
                                    id="tiro_ocho_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_ocho_agregar"
                                    id="id_folio_tiro_ocho_agregar" value="0">
                                <input type="hidden" name="tiro_8_folio_ticket" id="tiro_8_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_ocho_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 8:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_ocho_agregar"
                                    id="destino_final_tiro_ocho_agregar">
                                <input type="hidden" name="id_destino_final_tiro_ocho_agregar"
                                    id="id_destino_final_tiro_ocho_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_8" id="name_destino_final_tiro_8">
                            </div>
                        </div>


                        <div class="form-group" style="display: none;" id="tiro_nueve">
                            <label class="col-sm-2 control-label"><b>Tiro 9 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_nueve_agregar"
                                    id="tiro_nueve_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_nueve_agregar"
                                    id="id_folio_tiro_nueve_agregar" value="0">
                                <input type="hidden" name="tiro_9_folio_ticket" id="tiro_9_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_nueve_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 9:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_nueve_agregar"
                                    id="destino_final_tiro_nueve_agregar">
                                <input type="hidden" name="id_destino_final_tiro_nueve_agregar"
                                    id="id_destino_final_tiro_nueve_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_9" id="name_destino_final_tiro_9">
                            </div>
                        </div>


                        <div class="form-group" style="display: none;" id="tiro_diez">
                            <label class="col-sm-2 control-label"><b>Tiro 10 (Folio ticket):</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control tiros" name="tiro_diez_agregar"
                                    id="tiro_diez_agregar" autocomplete="off" onkeyup="sumar_tickets();">
                                <input type="hidden" name="id_folio_tiro_diez_agregar"
                                    id="id_folio_tiro_diez_agregar" value="0">
                                <input type="hidden" name="tiro_10_folio_ticket" id="tiro_10_folio_ticket" value="0">
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="tiro_diez_d">
                            <label class="col-sm-2 control-label"><b>Destino Final Tiro 10:</b>:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="destino_final_tiro_diez_agregar"
                                    id="destino_final_tiro_diez_agregar">
                                <input type="hidden" name="id_destino_final_tiro_diez_agregar"
                                    id="id_destino_final_tiro_diez_agregar" value="0">
                                <input type="hidden" name="name_destino_final_tiro_10" id="name_destino_final_tiro_10">
                            </div>
                        </div>
                        <!-- fin de actualizacion noviembre 2021 - cantidad de tiros 10 -->

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-chart-bar"></i> Total de
                                    pesos:</b></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="total_suma_tickets"
                                    id="total_suma_tickets" autocomplete="off" readonly="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b><i class="fas fa-clipboard-list"></i>
                                    Observaciones:</b></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="observaciones_supervision"
                                    id="observaciones_supervision" autocomplete="off" required="">
                            </div>
                        </div>
                    </div><!-- /.box body -->

                    <div class="box-footer">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                                <a href="?modulo=registros_supervision" class="btn btn-default btn-reset">Cancelar</a>
                            </div>
                        </div>
                    </div><!-- /.box footer -->
                </form>
            </div><!-- /.box -->
        </div>
        <!--/.col -->
    </div> <!-- /.row -->
</section><!-- /.content -->
<?php
}
?>