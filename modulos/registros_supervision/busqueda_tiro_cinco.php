<?php
if (isset($_GET['term'])){
  # conectare la base de datos
    $con=@mysqli_connect("localhost", "root", "", "bd_encierro");
  
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
  $fetch = mysqli_query($con,"SELECT * 
                  FROM cat_tickets_bascula 
                  WHERE folio_ticket like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' AND estatus_ID = 1 LIMIT 0 ,50 "); 
  
  /* Recuperar y almacenar en conjunto los resultados de la consulta.*/
  while ($row = mysqli_fetch_array($fetch)) {
    $id_ticket_nuevo=$row['ticket_ID'];
    $row_array['value'] = $row['peso_neto']."kg | " .$row['folio_ticket'];
    $row_array['id_ticket_agregar']=$row['ticket_ID'];
    $row_array['peso_agregar']=$row['peso_neto'];
    $row_array['folio_ticket_agregar']=$row['peso_neto'];
    array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>