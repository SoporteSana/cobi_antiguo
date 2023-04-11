<?php
if (isset($_GET['term'])) {
  # conectare la base de datos
  $con = @mysqli_connect("localhost", "root", "", "bd_encierro");

  $return_arr = array();
  /* Si la conexión a la base de datos , ejecuta instrucción SQL. */
  if ($con) {
    $fetch = mysqli_query($con, "SELECT * 
                  FROM cat_unidades 
                  WHERE unidad like '%" . mysqli_real_escape_string($con, ($_GET['term'])) . "%' AND estatus_ID = 1 LIMIT 0 ,50 ");

    /* Recuperar y almacenar en conjunto los resultados de la consulta.*/
    while ($row = mysqli_fetch_array($fetch)) {
      $id_unidad_nuevo = $row['unidad_ID'];
      $row_array['value'] = $row['unidad'] . " | " . $row['placas'];
      $row_array['id_unidad_agregar'] = $row['unidad_ID'];
      $row_array['unidad_agregar'] = $row['unidad'];

      $row_array['placas_agregar'] = $row['placas'];
      array_push($return_arr, $row_array);
    }
  }

  /* Cierra la conexión. */
  mysqli_close($con);

  /* Codifica el resultado del array en JSON. */
  echo json_encode($return_arr);
}

