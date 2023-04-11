
<?php  
if (isset($_POST['usuario_ID_perfil'])) {

  $query = mysqli_query($mysqli, "SELECT * FROM cat_usuarios WHERE usuario_ID='$_POST[usuario_ID_perfil]'") 
                                  or die('error '.mysqli_error($mysqli));
  $data  = mysqli_fetch_assoc($query);
}	
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Perfil de Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=perfil"> Perfil de usuario </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/perfil/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="usuario_ID_perfil_editar" value="<?php echo $data['usuario_ID']; ?>">     

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre completo: </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre_completo_perfil_editar" id="nombre_completo_perfil_editar" autocomplete="off" value="<?php echo $data['nombre_completo']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre de usuario: </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="usuario_perfil_editar" id="usuario_perfil_editar" autocomplete="off" value="<?php echo $data['usuario']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Correo: </label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="correo_perfil_editar" id="correo_perfil_editar" autocomplete="off" value="<?php echo $data['correo']; ?>">
                </div>
              </div>
            

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto:</label>
                <div class="col-sm-5">
                  <input type="file" name="foto_perfil_editar" id="foto_perfil_editar">
                  <br/>
                <?php  
                if ($data['foto']=="") { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="imagenes/usuarios/user-default.png" width="128">
                <?php
                }
                else { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="imagenes/usuarios/<?php echo $data['foto']; ?>" width="128">
                <?php
                }
                ?>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=perfil" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->