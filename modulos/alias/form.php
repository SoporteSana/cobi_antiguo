

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="fas fa-road"></i> Agregar ruta-alias
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=alias"> Ruta-alias </a></li>
      <li class="active"> agregar </li>
    </ol>
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/alias/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Turno:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="turno_alias_agregar" id="turno_alias_agregar" autocomplete="off" required>
                  <input type="hidden" class="form-control" name="id_turno_agregar" id="id_turno_agregar" autocomplete="off" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Ruta:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ruta_alias_agregar" id="ruta_alias_agregar" autocomplete="off" required>
                  <input type="hidden" class="form-control" name="id_ruta_agregar" id="id_ruta_agregar" autocomplete="off" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alias:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="alias_agregar" id="alias_agregar" autocomplete="off" required>
                  <input type="hidden" name="alta_id_agregar" id="alta_id_agregar" value="<?php echo $_SESSION['usuario_ID_sesion']; ?>">
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=alias" class="btn btn-default btn-reset">Cancelar</a>
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
                                            cat_alias.*,
                                            cat_turnos.turno,
                                            cat_rutas.ruta,
                                            cat_usuarios.usuario,
                                            cat_estatus_usuarios.estatus
                                        FROM
                                            cat_alias
                                        INNER JOIN cat_turnos ON cat_turnos.turno_ID = cat_alias.turno_ID
                                        INNER JOIN cat_rutas ON cat_rutas.ruta_ID = cat_alias.ruta_ID
                                        INNER JOIN cat_usuarios ON cat_usuarios.usuario_ID = cat_alias.alta_ID
                                        INNER JOIN cat_estatus_usuarios ON cat_estatus_usuarios.estatus_ID = cat_alias.estatus_ID
                                        WHERE alias_ID='$_GET[id]'")
      
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

  <section class="content-header">
    <h1>
      <i class="fas fa-road"></i> Modificar datos de la ruta-alias
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?modulo=alias"> Ruta-alias </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/alias/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="alias_ID_editar" value="<?php echo $data['alias_ID']; ?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Turno:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="turno_editar" id="turno_editar" autocomplete="off" value="<?php echo $data['turno']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Ruta:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ruta_editar" id="ruta_editar" autocomplete="off" value="<?php echo $data['ruta']; ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alias:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="alias_editar" id="alias_editar" autocomplete="off" value="<?php echo $data['alias']; ?>" required>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=alias" class="btn btn-default btn-reset">Cancelar</a>
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