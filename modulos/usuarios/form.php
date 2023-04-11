

<?php  

if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?modulo=usuarios"> Usuario </a></li>
      <li class="active"> agregar </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/usuarios/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre completo:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre_completo_agregar" id="nombre_completo_agregar" autocomplete="off" required>
                </div>
              </div>     

              <div class="form-group">
                <label class="col-sm-2 control-label">Usuario:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="usuario_agregar" id="usuario_agregar" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Contraseña: </label>
                <div class="col-sm-5">
                  <input type="password" class="form-control" name="password_agregar" id="password_agregar" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Permisos de acceso: </label>
                <div class="col-sm-5">
                  <select class="form-control" name="perfil_ID_agregar" id="perfil_ID_agregar" required>
                    <option value=""></option>
                    <option value="1">Vigilancia</option>
                    <option value="2">Supervisión</option>
                    <option value="3">Administración</option>
                    <option value="4">Sistemas</option>
                    <option value="5">Recursos Humanos</option>
                  </select>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=usuarios" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT cat_usuarios.*, cat_perfiles.perfil 
                                        FROM cat_usuarios
                                        INNER JOIN cat_perfiles ON cat_perfiles.perfil_ID = cat_usuarios.perfil_ID
                                        WHERE usuario_ID='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
  	}	
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar datos de Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=start"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?modulo=usuarios"> Usuario </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modulos/usuarios/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <input type="hidden" name="usuario_ID_editar" value="<?php echo $data['usuario_ID']; ?>">

              <div class="form-group">
                <label class="col-sm-2 control-label">Usuario:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="usuario_editar" id="usuario_editar" autocomplete="off" value="<?php echo $data['usuario']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre Completo:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre_completo_editar" id="nombre_completo_editar" autocomplete="off" value="<?php echo $data['nombre_completo']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Correo:</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="correo_editar" id="correo_editar" autocomplete="off" value="<?php echo $data['correo']; ?>">
                </div>
              </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto:</label>
                <div class="col-sm-5">
                  <input type="file" name="foto_editar" id="foto_editar">
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

              <div class="form-group">
                <label class="col-sm-2 control-label">Permisos de Acceso:</label>
                <div class="col-sm-5">
                  <select class="form-control" name="perfil_ID_editar" id="perfil_ID_editar" required>
                    <option value="<?php echo $data['perfil_ID']; ?>">ACTUAL: <?php echo $data['perfil']; ?></option>
                    <option value="1">Vigilancia</option>
                    <option value="2">Supervisión</option>
                    <option value="3">Administración</option>
                    <option value="4">Sistemas</option>
                    <option value="5">Recursos Humanos</option>
                  </select>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?modulo=usuarios" class="btn btn-default btn-reset">Cancelar</a>
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