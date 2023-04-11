
<?php  

require_once "config/database.php";


$query = mysqli_query($mysqli, "SELECT cat_usuarios.usuario_ID, cat_usuarios.usuario, cat_usuarios.foto, cat_usuarios.perfil_ID, cat_perfiles.perfil 
    FROM cat_usuarios 
    INNER JOIN cat_perfiles ON cat_perfiles.perfil_ID = cat_usuarios.perfil_ID 
    WHERE usuario_ID='$_SESSION[usuario_ID_sesion]'")
                                or die('error: '.mysqli_error($mysqli));


$data = mysqli_fetch_assoc($query);
?>

<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
 
  <?php  
  if ($data['foto']=="") { ?>
    <img src="imagenes/usuarios/user-default.png" class="user-image" alt="User Image"/>
  <?php
  }
  else { ?>
    <img src="imagenes/usuarios/<?php echo $data['foto']; ?>" class="user-image" alt="User Image"/>
  <?php
  }
  ?>

    <span class="hidden-xs"><?php echo $data['usuario']; ?> <i style="margin-left:5px" class="fa fa-angle-down"></i></span>
  </a>
  <ul class="dropdown-menu">

    <li class="user-header">

      <?php  
      if ($data['foto']=="") { ?>
        <img src="imagenes/usuarios/user-default.png" class="img-circle" alt="User Image"/>
      <?php
      }
      else { ?>
        <img src="imagenes/usuarios/<?php echo $data['foto']; ?>" class="img-circle" alt="User Image"/>
      <?php
      }
      ?>

      <p>
        <?php echo $data['usuario']; ?>
        <small><?php echo $data['perfil']; ?></small>
      </p>
    </li>
    
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a style="width:80px" href="?modulo=perfil" class="btn btn-default btn-flat">Perfil</a>
      </div>

      <div class="pull-right">
        <a style="width:80px" data-toggle="modal" href="#logout" class="btn btn-default btn-flat">Salir</a>
      </div>
    </li>
  </ul>
</li>