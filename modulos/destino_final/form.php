

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
    <i class="fas fa-map-marked-alt"></i> Agregar destino final
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=destino_final"> Destino Final </a></li>
      <li class="active"> agregar </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/destino_final/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Destino final:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="destino_final_agregar" id="destino_final_agregar" autocomplete="off" required>
                  <input type="hidden" name="alta_id_agregar" id="alta_id_agregar" value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=destino_final" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT * 
                                        FROM cat_destino_final
                                        WHERE destino_final_ID='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

  <section class="content-header">
    <h1>
    <i class="fas fa-map-marked-alt"></i> Modificar datos del destino final
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?modulo=destino_final"> destino_final </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/destino_final/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="destino_final_ID_editar" value="<?php echo $data['destino_final_ID']; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Destino final:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="destino_final_editar" id="destino_final_editar" autocomplete="off" value="<?php echo $data['destino_final']; ?>" required>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=destino_final" class="btn btn-default btn-reset">Cancelar</a>
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