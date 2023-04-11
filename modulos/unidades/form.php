

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="fas fa-truck-moving"></i> Agregar unidad
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=unidades"> Unidades </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" accept-charset="UTF-8" action="modulos/unidades/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">N.º Económico:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad_agregar" id="unidad_agregar" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Placas:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control masked" name="placas_agregar" id="placas_agregar" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();"   required>
                  <!-- <input type="text" class="form-control masked" name="placas_agregar" id="placas_agregar" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();"  placeholder="XXX-XXX-X" pattern="\w\w\w-\d\d\d-\w" data-charset="___-XXX-_" required> -->
                  <input type="hidden" name="alta_id_agregar" id="alta_id_agregar" value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">
                </div>
              </div>
              
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=unidades" class="btn btn-default btn-reset">Cancelar</a>
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
                                        FROM cat_unidades
                                        WHERE unidad_ID='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

  <section class="content-header">
    <h1>
      <i class="fas fa-truck-moving"></i> Modificar datos de supervisor
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?modulo=unidades"> unidades </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" accept-charset="UTF-8" action="modulos/unidades/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="unidad_ID_editar" value="<?php echo $data['unidad_ID']; ?>">

              <div class="form-group">
                <label class="col-sm-2 control-label">N.º Económico:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad_editar" id="unidad_editar" autocomplete="off" value="<?php echo $data['unidad']; ?>"  required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Placas:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control masked" name="placas_editar" id="placas_editar" autocomplete="off" value="<?php echo $data['placas']; ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=unidades" class="btn btn-default btn-reset">Cancelar</a>
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