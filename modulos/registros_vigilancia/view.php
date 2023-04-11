

<section class="content-header">
  <h1>
    <i class="far fa-clipboard"></i> Vigilancia Gestión de registros del día: <?php date_default_timezone_set('America/Mexico_City'); echo date('d-m-Y'); ?>

    <a class="btn btn-primary btn-social pull-right" href="?modulo=form_registros_vigilancia&form=add" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  

    if (empty($_GET['alert'])) {
      echo "";
    } 

    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              El registro se ha ingresado correctamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-info alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Se ha finalizado el viaje de la unidad. 
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
                El registro ha sido activada correctamente.
            </div>";
    }
 
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
                El registro se bloqueó con éxito.
            </div>";
    }
    ?>
    <br>
      <div class="box box-primary">
        <div class="box-body">
     
          <table id="tabla_registros_vigilancia" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Unidad</th>
                <th class="center">Fecha y Hora Salida:</th>
                <th class="center">Turno</th>
                <th class="center">Ruta</th>
                <th class="center">Alias</th>
                <th class="center">Operador</th>
                <th class="center">Recolectores</th>
                <th class="center">Recolector 1:</th>
                <th class="center">Recolector 2:</th>
                <th class="center">Recolector 3:</th>
                <th class="center">Recolector 4:</th>
                <th class="center">Recolector 5:</th>
                <th class="center">Estatus</th>
                <th class="center">Finalizar entrada:</th>
              </tr>
            </thead>


                        <tbody>
            <?php  
            $no = 1;
      
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
                                            WHERE cat_estatus_registro.estatus_ID = '1'
                                            ORDER BY
                                                cat_registros.registro_ID
                                            DESC
                                                ")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) { 
  
              echo "<tr>
                      <td width='50' class='center'>$no</td>";
              echo "  <td class='center'>$data[unidad]</td>
                      <td class='center'>$data[hora_salida]</td>
                      <td class='center'>$data[turno]</td>
                      <td class='center'>$data[ruta]</td>
                      <td class='center'>$data[alias]</td>
                      <td class='center'>$data[operador]</td>
                      <td class='center'>$data[tripulantes]</td>
                      <td class='center'>$data[Recolector_1]</td>
                      <td class='center'>$data[Recolector_2]</td>
                      <td class='center'>$data[Recolector_3]</td>
                      <td class='center'>$data[Recolector_4]</td>
                      <td class='center'>$data[Recolector_5]</td>
                      <td class='center'>$data[estatus] <i  class='fas fa-road text-success'></i></td>

                      <td class='center' width='100'>
                          <div>";

              echo "      <a data-toggle='tooltip' data-placement='top' class='btn btn-info btn-sm' href='?modulo=form_registros_vigilancia&form=edit&id=$data[registro_ID]'>
                                <i style='color:#fff'; class='fas fa-check-double'></i>
                                
                            </a>
                          </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content