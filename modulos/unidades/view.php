

<section class="content-header">
  <h1>
    <i class="fas fa-truck-moving"></i> Gestión de unidades
    <!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
    <a class="btn btn-primary btn-social pull-right" href="?modulo=form_unidades&form=add" data-toggle="tooltip">
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
              Los nuevos datos de la unidad se ha registrado correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Los datos de la unidad ha sido cambiado satisfactoriamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
                La unidad ha sido activado correctamente.
            </div>";
    }
 
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
                La unidad se ha puesto en mantenimiento.
            </div>";
    }
    ?>
    <br>
      <div class="box box-primary">
        <div class="box-body">
     
          <table id="tabla_unidades" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Unidad</th>
                <th class="center">Placas</th>
                <th class="center">Alta</th>
                <th class="center">Estatus</th>
                <th class="center"></th>
              </tr>
            </thead>


                        <tbody>
            <?php  
            $no = 1;
      
            $query = mysqli_query($mysqli, "SELECT
                                                cat_unidades.*,
                                                cat_estatus_unidades.estatus,
                                                cat_usuarios.usuario
                                            FROM
                                                cat_unidades
                                            INNER JOIN cat_estatus_unidades ON cat_estatus_unidades.estatus_ID = cat_unidades.estatus_ID
                                            INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_unidades.alta_ID
                                            ORDER BY
                                                cat_unidades.unidad_ID
                                            DESC")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) { 
  
              echo "<tr>
                      <td width='50' class='center'>$no</td>";
              echo "  <td class='center'>$data[unidad]</td>
                      <td class='center'>$data[placas]</td>
                      <td class='center'>$data[usuario]</td>
                      <td class='center'>$data[estatus]</td>

                      <td class='center' width='100'>
                          <div>";

                          if ($data['estatus']=='activo') { ?>
                            <a data-toggle="tooltip" data-placement="top" style="margin-right:5px" class="btn btn-warning btn-sm" href="modulos/unidades/proses.php?act=off&id=<?php echo $data['unidad_ID'];?>">
                              <i style="color:#fff"  class="fas fa-tools"></i>
                            </a>
            <?php
                          } 
                          else { ?>
                            <a data-toggle="tooltip" data-placement="top" style="margin-right:5px" class="btn btn-success btn-sm" href="modulos/unidades/proses.php?act=on&id=<?php echo $data['unidad_ID'];?>">
                              <i style="color:#fff" class="fas fa-check"></i>
                            </a>
            <?php
                          }

              echo "      <a data-toggle='tooltip' data-placement='top' class='btn btn-primary btn-sm' href='?modulo=form_unidades&form=edit&id=$data[unidad_ID]'>
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