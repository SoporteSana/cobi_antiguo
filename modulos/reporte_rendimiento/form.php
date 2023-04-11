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
  $unidad_ID_busqueda       = $_POST['unidad_ID_rendimiento_busqueda'];


  if (isset($_POST['fecha_uno_busqueda'])) {
      $no    = 1;
      $query = mysqli_query($mysqli, "SELECT
                                            cat_registros.registro_ID,
                                            cat_unidades.unidad,
                                            cat_registros.fecha,
                                            cat_registros.rendimiento,
                                            cat_registros.hora_salida,
                                            cat_registros.hora_entrada,
                                            cat_registros.tiempo_ruta,
                                            (cat_registros.total_peso/1000) AS total_toneladas,
                                            cat_estatus_registro.estatus
                                          FROM cat_registros
                                            INNER JOIN cat_unidades ON cat_unidades.unidad_ID = cat_registros.unidad_ID
                                            INNER JOIN cat_estatus_registro ON cat_estatus_registro.estatus_ID = cat_registros.estatus_ID
                                        WHERE
                                            (
                                                cat_registros.unidad_ID = '$unidad_ID_busqueda' OR cat_registros.unidad_ID LIKE '$unidad_ID_busqueda%'
                                            ) AND(
                                                cat_registros.fecha BETWEEN '$fecha_uno_busqueda' AND '$fecha_dos_busqueda'
                                            ) AND(cat_registros.estatus_ID = '3');")
      


                                      or die('error '.mysqli_error($mysqli));


      $count  = mysqli_num_rows($query);
  }
?>

          <table id="tabla_reporte_rendimiento" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.:</th>
                <th class="center">Unidad:</th>
                <th class="center">Fecha:</th>
                <th class="center">Rendimiento:</th>
                <th class="center">Hora Salida:</th>
                <th class="center">Hora Entrada:</th>
                <th class="center">Tiempo en ruta:</th>
                <th class="center">Total Pesos:</th>
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
                      <td class='center'>$data[fecha]</td>
                      <td class='center'>$data[rendimiento]</td>
                      <td class='center'>$data[hora_salida]</td>
                      <td class='center'>$data[hora_entrada]</td>
                      <td class='center'>$data[tiempo_ruta]</td>
                      <td class='center'>$data[total_toneladas] t.</td>
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