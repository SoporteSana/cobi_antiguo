

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="fas fa-ticket-alt"></i> Agregar ticket de báscula
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=tickets"> Tickets </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/tickets/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="alta_id_ticket_agregar" id="alta_id_ticket_agregar" value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Folio:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="folio_ticket_agregar" id="folio_ticket_agregar" autocomplete="off" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Número Económico:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad_ticket_agregar" id="unidad_ticket_agregar" autocomplete="off" required="">
                  <input type="hidden" class="form-control" name="id_unidad_ticket_agregar" id="id_unidad_ticket_agregar" autocomplete="off" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Placas unidad:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="placas_ticket_agregar" id="placas_ticket_agregar" autocomplete="off" readonly="" >
                </div>
              </div>
              

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha:</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" name="fecha_ticket_agregar" id="fecha_ticket_agregar" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Peso Neto:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="peso_ticket_agregar" id="peso_ticket_agregar" autocomplete="off" required="">
                </div>
              </div>
              
              <!-- <div class="form-group">
                <label class="col-sm-2 control-label">Destino final:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="destino_final_t_agregar" id="destino_final_t_agregar" autocomplete="off" required="">
                  <input type="hidden" class="form-control" name="id_destino_final_t_agregar" id="id_destino_final_t_agregar" autocomplete="off" >
                </div>
              </div> -->

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=tickets" class="btn btn-default btn-reset">Cancelar</a>
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
                                          cat_tickets_bascula.*,
                                          cat_unidades.unidad,
                                          cat_unidades.placas,
                                          cat_estatus_tickets.estatus
                                      FROM
                                          cat_tickets_bascula
                                      INNER JOIN cat_unidades ON cat_unidades.unidad_ID = cat_tickets_bascula.unidad_ID
                                      -- INNER JOIN cat_destino_final ON cat_destino_final.destino_final_ID = cat_tickets_bascula.destino_final_ID
                                      INNER JOIN cat_estatus_tickets ON cat_estatus_tickets.estatus_ID = cat_tickets_bascula.estatus_ID
                                      WHERE ticket_ID='$_GET[id]'")
      
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

  <section class="content-header">
    <h1>
      <i class="fas fa-ticket-alt"></i> Modificar datos del ticket
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?modulo=tickets"> Tickets </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/tickets/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="tickets_ID_editar" value="<?php echo $data['ticket_ID']; ?>">
              <input type="hidden" name="modificacion_id_ticket_editar" id="modificacion_id_ticket_editar" value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Folio:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="folio_ticket_editar" id="folio_ticket_editar" autocomplete="off" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $data['folio_ticket']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Número Económico:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad_ticket_editar" id="unidad_ticket_editar" autocomplete="off" required=""  value="<?php echo $data['unidad']; ?>">
                  <input type="hidden" class="form-control" name="id_unidad_ticket_editar" id="id_unidad_ticket_editar" autocomplete="off" value="<?php echo $data['unidad_ID']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Placas unidad:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="placas_ticket_editar" id="placas_ticket_editar" autocomplete="off" value="<?php echo $data['placas']; ?>" readonly="" >
                </div>
              </div>
              

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha:</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" name="fecha_ticket_editar" id="fecha_ticket_editar" autocomplete="off" required value="<?php echo $data['fecha']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Peso Neto:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="peso_ticket_editar" id="peso_ticket_editar" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="" value="<?php echo $data['peso_neto']; ?>">
                </div>
              </div>
              <!-- <div class="form-group">
                <label class="col-sm-2 control-label">Número Económico:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="destino_final_t_editar" id="destino_final_t_editar" autocomplete="off" required=""  value="<?php echo $data['destino_final']; ?>">
                  <input type="hidden" class="form-control" name="id_destino_final_t_editar" id="id_destino_final_t_editar" autocomplete="off" value="<?php echo $data['destino_final_ID']; ?>">
                </div>
              </div> -->
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=tickets" class="btn btn-default btn-reset">Cancelar</a>
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