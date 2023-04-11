<?php
if (isset($_GET['term'])){
  # conectare la base de datos
    $con=@mysqli_connect("localhost", "root", "", "bd_encierro");
  
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
  $fetch = mysqli_query($con,"SELECT cat_alias.*, cat_turnos.turno, cat_rutas.ruta
                  FROM cat_alias
                  INNER JOIN cat_turnos ON cat_turnos.turno_ID = cat_alias.turno_ID
                  INNER JOIN cat_rutas ON cat_rutas.ruta_ID = cat_alias.ruta_ID
                  WHERE cat_alias.alias like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' AND cat_alias.estatus_ID = 1 LIMIT 0 ,50 "); 
  
  /* Recuperar y almacenar en conjunto los resultados de la consulta.*/
  while ($row = mysqli_fetch_array($fetch)) {
    $id_alias_nuevo=$row['alias_ID'];
    $row_array['value'] = $row['alias'];
    $row_array['id_alias_agregar']=$row['alias_ID'];
    $row_array['alias_agregar']=$row['alias'];
    $row_array['id_turno_agregar']=$row['turno_ID'];
    $row_array['turno_agregar']=$row['turno'];
    $row_array['id_ruta_agregar']=$row['ruta_ID'];
    $row_array['ruta_agregar']=$row['ruta'];
    array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>