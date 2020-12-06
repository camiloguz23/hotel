<?php

require_once('baseDatos.php');

$consulta = "SELECT * FROM tipo_habitacion WHERE nom_tip_habi != 'Seleccione habitacion'";
$query = mysqli_query($base, $consulta);

if(!$query) {
    die("Consulta fallida" . mysqli_error($base));
}

while ($row = mysqli_fetch_array($query)) {
    $json[] = array(
        'id' => $row['id_tipo_habi'],
        'tipo' => $row['nom_tip_habi']
    );
}

echo json_encode($json);
return;


?>