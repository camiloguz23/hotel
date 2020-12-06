<?php

require_once('baseDatos.php');

$consulta = "SELECT * FROM habitacion, tipo_habitacion WHERE habitacion.id_tipo_habi = tipo_habitacion.id_tipo_habi AND habitacion.num_habitaciones != 'Seleccione habitacion'";
$query = mysqli_query($base, $consulta);

if(!$query) {
    die("Consulta fallida" . mysqli_error($base));
}

while ($row = mysqli_fetch_array($query)) {
    $json[] = array(
        'id' => $row['id_habitacion'],
        'tipo' => $row['nom_tip_habi'],
        'no_personas' => $row['numero_personas'],
        'no_habitacion' => $row['num_habitaciones'],
        'disponibles_habi' => $row['disponibles_habi']
    );
}

echo json_encode($json);
return;

?>