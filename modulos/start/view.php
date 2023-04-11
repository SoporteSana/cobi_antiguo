  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?modulo=beranda"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable" id="alert_bienvenida">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['nombre_completo_sesion']; ?></strong> a la aplicación del ENCIERRO.
          </p>

          <?php 
          if ($_SESSION['perfil_sesion']=='Vigilancia') {
             echo "<h4>Manual de COBI <a href=\"Manual_COBI_vigilancia.pdf\" download=\"Manual_COBI_vigilancia\"><i class=\"icon fas fa-file-pdf fa-2x text-danger\"></i></a></h4>";
           } ?>


          <?php 
          if ($_SESSION['perfil_sesion']=='Supervisión') {
             echo "<h4>Manual de COBI <a href=\"Manual_COBI_supervision.pdf\" download=\"Manual_COBI_supervision\"><i class=\"icon fas fa-file-pdf fa-2x text-danger\"></i></a></h4>";
           } ?>


           <?php 
          if ($_SESSION['perfil_sesion']=='Administración') {
             echo "<h4>Manual de COBI <a href=\"Manual_COBI_administracion.pdf\" download=\"Manual_COBI_administracion\"><i class=\"icon fas fa-file-pdf fa-2x text-danger\"></i></a></h4>";
           } ?>



           <?php 
          if ($_SESSION['perfil_sesion']=='Sistemas') {
             echo "<h4>Manual de COBI <a href=\"Manual_COBI_sistemas.pdf\" download=\"Manual_COBI_sistemas\"><i class=\"icon fas fa-file-pdf fa-2x text-danger\"></i></a></h4>";
           } ?>


        </div>
      </div>  
    </div>
   
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#00c0ef;color:#fff" class="small-box">
          <div class="inner">
            <?php  
          
            $query = mysqli_query($mysqli, "SELECT COUNT(usuario_ID) as conteo_usuarios FROM cat_usuarios")
                                            or die('Error '.mysqli_error($mysqli));

           
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['conteo_usuarios']; ?></h3>
            <p>Usuarios APP</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#00a65a;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(supervisor_ID) as conteo_supervisor FROM cat_supervisores")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['conteo_supervisor']; ?></h3>
            <p>SUPERVISORES</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-tie"></i>
          </div>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#f39c12;color:#fff" class="small-box">
          <div class="inner">
            <?php  
  
            $query = mysqli_query($mysqli, "SELECT COUNT(registro_ID) as conteo_registros FROM cat_registros")
                                            or die('Error'.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['conteo_registros']; ?></h3>
            <p>REGISTROS</p>
          </div>
          <div class="icon">
            <i class="far fa-clipboard"></i>
          </div>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#dd4b39;color:#fff" class="small-box">
          <div class="inner">
            <?php   
  
            $query = mysqli_query($mysqli, "SELECT COUNT(operador_ID) as conteo_operadores FROM cat_operadores")
                                            or die('Error: '.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['conteo_operadores']; ?></h3>
            <p>OPERADORES DE VEHICULOS</p>
          </div>
          <div class="icon">
            <i class="fa fa-clone"></i>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  </section><!-- /.content -->