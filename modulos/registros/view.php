

<section class="content-header">
  <h1>
    <i class="far fa-clipboard"></i> Gestión de registros del día: <?php date_default_timezone_set('America/Mexico_City'); echo date('d-m-Y'); ?>

    <a class="btn btn-primary btn-social pull-right" href="?modulo=form_registros&form=add" data-toggle="tooltip">
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
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Los datos del registro han sido cambiado satisfactoriamente.
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
     
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Unidad</th>
                <th class="center">Supervisor</th>
                <th class="center">Turno</th>
                <th class="center">Ruta</th>
                <th class="center">Alias</th>
                <th class="center">Operador</th>
                <th class="center">Alta</th>
                <th class="center">Estatus</th>
                <th class="center"></th>
              </tr>
            </thead>


                        <tbody>
            <?php  
            $no = 1;
      
            $query = mysqli_query($mysqli, "SELECT
                                                cat_registros.*,
                                                cat_unidades.unidad,
                                                cat_supervisores.nombre_completo AS supervisor,
                                                cat_turnos.turno,
                                                cat_rutas.ruta,
                                                cat_alias.alias,
                                                cat_operadores.nombre_completo AS operador,
                                                cat_usuarios.usuario,
                                                cat_estatus_usuarios.estatus
                                            FROM
                                                cat_registros
                                            INNER JOIN cat_unidades ON cat_unidades.unidad_ID = cat_registros.unidad_ID
                                            INNER JOIN cat_supervisores ON cat_supervisores.supervisor_ID = cat_registros.supervisor_ID
                                            INNER JOIN cat_turnos ON cat_turnos.turno_ID = cat_registros.turno_ID
                                            INNER JOIN cat_rutas ON cat_rutas.ruta_ID = cat_registros.ruta_ID
                                            INNER JOIN cat_alias ON cat_alias.alias_ID = cat_registros.alias_ID
                                            INNER JOIN cat_operadores ON cat_operadores.operador_ID = cat_registros.operador_ID
                                            INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_registros.alta_ID
                                            INNER JOIN cat_estatus_usuarios ON cat_estatus_usuarios.estatus_ID = cat_registros.estatus_ID
                                            WHERE cat_registros.fecha = CURDATE()
                                            ORDER BY
                                                cat_registros.ruta_ID
                                            DESC
                                                ")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) { 
  
              echo "<tr>
                      <td width='50' class='center'>$no</td>";
              echo "  <td class='center'>$data[unidad]</td>
                      <td class='center'>$data[supervisor]</td>
                      <td class='center'>$data[turno]</td>
                      <td class='center'>$data[ruta]</td>
                      <td class='center'>$data[alias]</td>
                      <td class='center'>$data[operador]</td>
                      <td class='center'>$data[usuario]</td>
                      <td class='center'>$data[estatus]</td>

                      <td class='center' width='100'>
                          <div>";

                          if ($data['estatus']=='activo') { ?>
                            <a data-toggle="tooltip" data-placement="top" style="margin-right:5px" class="btn btn-warning btn-sm" href="modulos/registros/proses.php?act=off&id=<?php echo $data['registro_ID'];?>">
                              <i style="color:#fff"  class="fas fa-power-off"></i>
                            </a>
            <?php
                          } 
                          else { ?>
                            <a data-toggle="tooltip" data-placement="top" style="margin-right:5px" class="btn btn-success btn-sm" href="modulos/registros/proses.php?act=on&id=<?php echo $data['registro_ID'];?>">
                              <i style="color:#fff" class="fas fa-check"></i>
                            </a>
            <?php
                          }

              echo "      <a data-toggle='tooltip' data-placement='top' class='btn btn-primary btn-sm' href='?modulo=form_registros&form=edit&id=$data[registro_ID]'>
                                <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
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