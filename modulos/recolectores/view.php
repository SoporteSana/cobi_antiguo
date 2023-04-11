

<section class="content-header">
  <h1>
    <i class="fas fa-people-carry"></i> Gestión de recolectores

    <a class="btn btn-primary btn-social pull-right" href="?modulo=form_recolectores&form=add" data-toggle="tooltip">
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
              Los nuevos datos del recolector se ha registrado correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Los datos del recolector ha sido cambiado satisfactoriamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
                El recolector ha sido activado correctamente.
            </div>";
    }
 
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
                El recolector se bloqueó con éxito.
            </div>";
    }
    ?>
    <br>
      <div class="box box-primary">
        <div class="box-body">
     
          <table id="tabla_recolectores" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Nombre del recolector</th>
                <th class="center">Alta</th>
                <th class="center">Estatus</th>
                <th class="center"></th>
              </tr>
            </thead>


                        <tbody>
            <?php  
            $no = 1;
      
            $query = mysqli_query($mysqli, "SELECT
                                                cat_recolectores.*,
                                                cat_estatus_usuarios.estatus,
                                                cat_usuarios.usuario
                                            FROM
                                                cat_recolectores
                                            INNER JOIN cat_estatus_usuarios ON cat_estatus_usuarios.estatus_ID = cat_recolectores.estatus_ID
                                            INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_recolectores.alta_ID
                                            ORDER BY
                                                cat_recolectores.recolector_ID
                                            DESC")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) { 
  
              echo "<tr>
                      <td width='50' class='center'>$no</td>";
              echo "  <td class='center'>$data[nombre_completo]</td>
                      <td class='center'>$data[usuario]</td>
                      <td class='center'>$data[estatus]</td>

                      <td class='center' width='100'>
                          <div>";

                          if ($data['estatus']=='activo') { ?>
                            <a data-toggle="tooltip" data-placement="top" style="margin-right:5px" class="btn btn-warning btn-sm" href="modulos/recolectores/proses.php?act=off&id=<?php echo $data['recolector_ID'];?>">
                              <i style="color:#fff"  class="fas fa-power-off"></i>
                            </a>
            <?php
                          } 
                          else { ?>
                            <a data-toggle="tooltip" data-placement="top" style="margin-right:5px" class="btn btn-success btn-sm" href="modulos/recolectores/proses.php?act=on&id=<?php echo $data['recolector_ID'];?>">
                              <i style="color:#fff" class="fas fa-check"></i>
                            </a>
            <?php
                          }

              echo "      <a data-toggle='tooltip' data-placement='top' class='btn btn-primary btn-sm' href='?modulo=form_recolectores&form=edit&id=$data[recolector_ID]'>
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