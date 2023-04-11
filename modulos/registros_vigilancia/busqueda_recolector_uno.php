<?php
if (isset($_GET['term'])){
  # conectare la base de datos
    $con=@mysqli_connect("localhost", "root", "", "bd_encierro");
  
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
  $fetch = mysqli_query($con,"SELECT * 
                  FROM cat_recolectores 
                  WHERE nombre_completo like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' AND estatus_ID = 1 LIMIT 0 ,50 "); 
  
  /* Recuperar y almacenar en conjunto los resultados de la consulta.*/
  while ($row = mysqli_fetch_array($fetch)) {
    $id_recolector_nuevo=$row['recolector_ID'];
    $row_array['value'] = $row['nombre_completo'];
    $row_array['id_recolector_agregar']=$row['recolector_ID'];
    $row_array['recolector_agregar']=$row['nombre_completo'];
    array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>