<section class="content-header">
  <h1>
    <i class="fa fa-search"></i> Resultados de los filtros
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
          <p>
            <button type="button" class="btn btn-danger" style="width: 130px;" onclick="window.close();">
              <i class="fas fa-times-circle"></i> Cerrar consulta
            </button>
          </p>

<?php

  $hari_ini = date("d-m-Y");
  // echo $_POST['unidad_ID_busqueda'];
  $fecha_uno_busqueda       = $_POST['fecha_uno_busqueda'];
  $fecha_dos_busqueda       = $_POST['fecha_dos_busqueda'];
  $unidad_ID_busqueda       = $_POST['unidad_ID_busqueda'];
  $asignacion_ID_busqueda   = $_POST['asignacion_ID_busqueda'];
  $supervisor_ID_busqueda   = $_POST['supervisor_ID_busqueda'];
  $alias_ID_busqueda        = $_POST['alias_ID_busqueda'];
  $turno_ID_busqueda        = $_POST['turno_ID_busqueda'];
  $operador_ID_busqueda     = $_POST['operador_ID_busqueda'];
  $destino_final_ID_busqueda     = $_POST['destino_final_ID_busqueda'];


  if (isset($_POST['fecha_uno_busqueda'])) {
      $no    = 1;
      $query = mysqli_query($mysqli, "SELECT
      cat_registros.registro_ID,
      cat_unidades.unidad,
      cat_asignaciones.asignacion,
      cat_registros.semana,
      cat_registros.dia,
      cat_registros.fecha,
      cat_usuarios.nombre_completo AS nombre_supervisor,
      cat_alias.alias,
      cat_turnos.turno,
      cat_rutas.ruta,
      cat_operadores.nombre_completo AS nombre_operador,
      cat_registros.tripulantes,
      R1.nombre_completo AS Recolector_1,
      R2.nombre_completo AS Recolector_2,
      R3.nombre_completo AS Recolector_3,
      R4.nombre_completo AS Recolector_4,
      R5.nombre_completo AS Recolector_5,
      cat_registros.km_salida,
      cat_registros.km_entrada,
      cat_registros.recorrido,
      cat_registros.litros_cargados,
      cat_registros.rendimiento,
      cat_registros.hora_salida,
      cat_registros.hora_entrada,
      cat_registros.hora_recorridas,
      cat_registros.tiempo_ruta,
      cat_registros.total_peso,
      cat_registros.viajes,
      cat_registros.tiro_1_folio_ticket,
      cat_registros.name_destino_final_tiro_1 AS destino_final_tiro_1,
      cat_registros.tiro_2_folio_ticket,
      cat_registros.name_destino_final_tiro_2 AS destino_final_tiro_2,
      cat_registros.tiro_3_folio_ticket,
      cat_registros.name_destino_final_tiro_3 AS destino_final_tiro_3,
      cat_registros.tiro_4_folio_ticket,
      cat_registros.name_destino_final_tiro_4 AS destino_final_tiro_4,
      cat_registros.tiro_5_folio_ticket,
      cat_registros.name_destino_final_tiro_5 AS destino_final_tiro_5,
      cat_registros.tiro_6_folio_ticket,
      cat_registros.name_destino_final_tiro_6 AS destino_final_tiro_6,
      cat_registros.tiro_7_folio_ticket,
      cat_registros.name_destino_final_tiro_7 AS destino_final_tiro_7,
      cat_registros.tiro_8_folio_ticket,
      cat_registros.name_destino_final_tiro_8 AS destino_final_tiro_8,
      cat_registros.tiro_9_folio_ticket,
      cat_registros.name_destino_final_tiro_9 AS destino_final_tiro_9,
      cat_registros.tiro_10_folio_ticket,
      cat_registros.name_destino_final_tiro_10 AS destino_final_tiro_10,
      cat_registros.observaciones,
      cat_estatus_registro.estatus 
    FROM
      cat_registros
      INNER JOIN cat_unidades ON cat_unidades.unidad_ID = cat_registros.unidad_ID
      INNER JOIN cat_asignaciones ON cat_asignaciones.asignacion_ID = cat_registros.asignacion_ID
      INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_registros.supervisor_ID
      INNER JOIN cat_alias ON cat_alias.alias_ID = cat_registros.alias_ID
      INNER JOIN cat_turnos ON cat_turnos.turno_ID = cat_registros.turno_ID
      INNER JOIN cat_rutas ON cat_rutas.ruta_ID = cat_registros.ruta_ID
      INNER JOIN cat_operadores ON cat_operadores.operador_ID = cat_registros.operador_ID
      INNER JOIN cat_estatus_registro ON cat_estatus_registro.estatus_ID = cat_registros.estatus_ID
      INNER JOIN cat_recolectores R1 ON R1.recolector_ID = cat_registros.recolector_1_ID
      INNER JOIN cat_recolectores R2 ON R2.recolector_ID = cat_registros.recolector_2_ID
      INNER JOIN cat_recolectores R3 ON R3.recolector_ID = cat_registros.recolector_3_ID
      INNER JOIN cat_recolectores R4 ON R4.recolector_ID = cat_registros.recolector_4_ID
      INNER JOIN cat_recolectores R5 ON R5.recolector_ID = cat_registros.recolector_5_ID 
    WHERE
      ( cat_registros.unidad_ID = '$unidad_ID_busqueda' OR cat_registros.unidad_ID LIKE '$unidad_ID_busqueda%' ) 
      AND ( cat_registros.asignacion_ID = '$asignacion_ID_busqueda' OR cat_registros.asignacion_ID LIKE '$asignacion_ID_busqueda%' ) 
      AND ( cat_registros.fecha BETWEEN '$fecha_uno_busqueda' AND '$fecha_dos_busqueda' ) 
      AND ( cat_registros.supervisor_ID = '$supervisor_ID_busqueda' OR cat_registros.supervisor_ID LIKE '$supervisor_ID_busqueda%' ) 
      AND ( cat_registros.alias_ID = '$alias_ID_busqueda' OR cat_registros.alias_ID LIKE '$alias_ID_busqueda%' ) 
      AND ( cat_registros.turno_ID = '$turno_ID_busqueda' OR cat_registros.turno_ID LIKE '$turno_ID_busqueda%' ) 
      AND ( cat_registros.operador_ID = '$operador_ID_busqueda' OR cat_registros.operador_ID LIKE '$operador_ID_busqueda%' ) 
      AND ((cat_registros.destino_final_tiro_1 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_1 LIKE '$destino_final_ID_busqueda%') 
        OR ( cat_registros.destino_final_tiro_2 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_2 LIKE '$destino_final_ID_busqueda%' ) 
        OR ( cat_registros.destino_final_tiro_3 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_3 LIKE '$destino_final_ID_busqueda%' ) 
        OR ( cat_registros.destino_final_tiro_4 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_4 LIKE '$destino_final_ID_busqueda%' ) 
        OR ( cat_registros.destino_final_tiro_5 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_5 LIKE '$destino_final_ID_busqueda%' ) 
        OR ( cat_registros.destino_final_tiro_6 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_6 LIKE '$destino_final_ID_busqueda%' ) 
      OR ( cat_registros.destino_final_tiro_7 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_7 LIKE '$destino_final_ID_busqueda%' )
      OR ( cat_registros.destino_final_tiro_8 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_8 LIKE '$destino_final_ID_busqueda%' )
      OR ( cat_registros.destino_final_tiro_9 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_9 LIKE '$destino_final_ID_busqueda%' )
      OR ( cat_registros.destino_final_tiro_10 = '$destino_final_ID_busqueda' OR cat_registros.destino_final_tiro_10 LIKE '$destino_final_ID_busqueda%' )) 
      AND ( cat_registros.estatus_ID = '3' );")
      


                                      or die('error '.mysqli_error($mysqli));


      $count  = mysqli_num_rows($query);
  }
?>

          <table id="tabla_reporte_filtros" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.:</th>
                <th class="center">Unidad:</th>
                <th class="center">Asignación:</th>
                <th class="center">Semana:</th>
                <th class="center">Supervisor:</th>
                <th class="center">Día:</th>
                <th class="center">Fecha:</th>
                <th class="center">Turno:</th>
                <th class="center">Ruta:</th>
                <th class="center">Alias:</th>
                <th class="center">Operador:</th>
                <th class="center">Recolectores:</th>
                <th class="center">Recolector 1:</th>
                <th class="center">Recolector 2:</th>
                <th class="center">Recolector 3:</th>
                <th class="center">Recolector 4:</th>
                <th class="center">Recolector 5:</th>
                <th class="center">Km. Salida:</th>
                <th class="center">Km. Entrada:</th>
                <th class="center">Recorrido:</th>
                <th class="center">Lt. Cargados:</th>
                <th class="center">Rendimiento:</th>
                <th class="center">Hora Salida:</th>
                <th class="center">Hora Entrada:</th>
                <th class="center">Hora del tablero:</th>
                <th class="center">Tiempo en Ruta:</th>
                <th class="center">Total Pesos:</th>
                <th class="center">Viajes:</th>
                <th class="center">Tiro 1:</th>
                <th class="center">Destino Tiro 1:</th>
                <th class="center">Tiro 2:</th>
                <th class="center">Destino Tiro 2:</th>
                <th class="center">Tiro 3:</th>
                <th class="center">Destino Tiro 3:</th>
                <th class="center">Tiro 4:</th>
                <th class="center">Destino Tiro 4:</th>
                <th class="center">Tiro 5:</th>
                <th class="center">Destino Tiro 5:</th>
                <th class="center">Tiro 6:</th>
                <th class="center">Destino Tiro 6:</th>
                <th class="center">Tiro 7:</th>
                <th class="center">Destino Tiro 7:</th>
                <th class="center">Tiro 8:</th>
                <th class="center">Destino Tiro 8:</th>
                <th class="center">Tiro 9:</th>
                <th class="center">Destino Tiro 9:</th>
                <th class="center">Tiro 10:</th>
                <th class="center">Destino Tiro 10:</th>
                <th class="center">Observaciones:</th>
                <th class="center">Estado:</th>
              </tr>
            </thead>

            <tbody>
            
  <?php
    
    if($count == 0) {
      echo '<div class="alert alert-warning" role="alert">
              <b>¡SIN RESULTADOS!</b> <i class="fas fa-sad-tear"></i>
            </div>';
        
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query)) {
            $tanggal       = $data['fecha'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];

            echo "  <tr>
                      <td width='50' class='center'>$no</td>";
            echo "
                      <td class='center'>$data[unidad]</td>
                      <td class='center'>$data[asignacion]</td>
                      <td class='center'>$data[semana]</td>
                      <td class='center'>$data[nombre_supervisor]</td>
                      <td class='center'>$data[dia]</td>
                      <td class='center'>$data[fecha]</td>
                      <td class='center'>$data[turno]</td>
                      <td class='center'>$data[ruta]</td>
                      <td class='center'>$data[alias]</td>
                      <td class='center'>$data[nombre_operador]</td>
                      <td class='center'>$data[tripulantes]</td>
                      <td class='center'>$data[Recolector_1]</td>
                      <td class='center'>$data[Recolector_2]</td>
                      <td class='center'>$data[Recolector_3]</td>
                      <td class='center'>$data[Recolector_4]</td>
                      <td class='center'>$data[Recolector_5]</td>
                      <td class='center'>$data[km_salida]</td>
                      <td class='center'>$data[km_entrada]</td>
                      <td class='center'>$data[recorrido]</td>
                      <td class='center'>$data[litros_cargados]</td>
                      <td class='center'>$data[rendimiento]</td>
                      <td class='center'>$data[hora_salida]</td>
                      <td class='center'>$data[hora_entrada]</td>
                      <td class='center'>$data[hora_recorridas]</td>
                      <td class='center'>$data[tiempo_ruta]</td>
                      <td class='center'>$data[total_peso]</td>
                      <td class='center'>$data[viajes]</td>
                      <td class='center'>$data[tiro_1_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_1]</td>
                      <td class='center'>$data[tiro_2_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_2]</td>
                      <td class='center'>$data[tiro_3_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_3]</td>
                      <td class='center'>$data[tiro_4_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_4]</td>
                      <td class='center'>$data[tiro_5_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_5]</td>
                      <td class='center'>$data[tiro_6_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_6]</td>
                      <td class='center'>$data[tiro_7_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_7]</td>
                      <td class='center'>$data[tiro_8_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_8]</td>
                      <td class='center'>$data[tiro_9_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_9]</td>
                      <td class='center'>$data[tiro_10_folio_ticket]</td>
                      <td class='center'>$data[destino_final_tiro_10]</td>
                      <td class='center'>$data[observaciones]</td>
                      <td class='center'>$data[estatus]</td>
                    </tr>";
                    $no++;
                  }
                }
              ?> 

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>