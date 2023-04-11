

<section class="content-header">
  <h1>
    <i class="fas fa-ticket-alt"></i> Tickets de peso de básculas

    <a class="btn btn-primary btn-social pull-right" href="?modulo=form_tickets&form=add" data-toggle="tooltip">
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
              El ticket se ha registrado correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Los datos del ticket han sido cambiado satisfactoriamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
               
            </div>";
    }
 
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>

            </div>";
    }
    ?>
    <br>
      <div class="box box-primary">
        <div class="box-body">
     
          <table id="tabla_tickets" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Fecha</th>
                <th class="center">Folio</th>
                <th class="center">Unidad</th>
                <th class="center">Placas</th>
                <th class="center">Peso Neto</th>
                <th class="center"></th>
              </tr>
            </thead>


                        <tbody>
            <?php  
            $no = 1;
      
            $query = mysqli_query($mysqli, "SELECT
                                                cat_tickets_bascula.*,
                                                cat_unidades.unidad,
                                                cat_unidades.placas,
                                                -- cat_destino_final.destino_final,
                                                cat_estatus_tickets.estatus
                                            FROM
                                                cat_tickets_bascula
                                            INNER JOIN cat_unidades ON cat_unidades.unidad_ID = cat_tickets_bascula.unidad_ID
                                            -- INNER JOIN cat_destino_final ON cat_destino_final.destino_final_ID = cat_tickets_bascula.destino_final_ID
                                            INNER JOIN cat_estatus_tickets ON cat_estatus_tickets.estatus_ID = cat_tickets_bascula.estatus_ID
                                            ORDER BY
                                                cat_tickets_bascula.ticket_ID
                                            DESC
                                            limit 300")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) { 
  
              echo "<tr>
                      <td width='50' class='center'>$no</td>";
              echo "  <td class='center'>$data[fecha]</td>
                      <td class='center'>$data[folio_ticket]</td>
                      <td class='center'>$data[unidad]</td>
                      <td class='center'>$data[placas]</td>
                      <td class='center'>$data[peso_neto] kg</td>

                      <td class='center' width='100'>
                          <div>";

              echo "      <a data-toggle='tooltip' data-placement='top' class='btn btn-warning btn-sm' href='?modulo=form_tickets&form=edit&id=$data[ticket_ID]'>
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