<?php

require_once('baseDatos.php');

$consulta = "SELECT reservas.id_reservas ,reservas.id_habitacion, tipo_habitacion.nom_tip_habi, reservas.nom_cliente, reservas.correo_cliente, reservas.fecha_ingreso, reservas.fecha_salida, reservas.documento  FROM reservas, tipo_habitacion, habitacion WHERE reservas.id_habitacion = habitacion.id_habitacion AND tipo_habitacion.id_tipo_habi = habitacion.id_tipo_habi";
$query = mysqli_query($base, $consulta);

if(!$query) {
    die("Consulta fallida" . mysqli_error($base));
}

while ($row = mysqli_fetch_array($query)) {
    $json[] = array(
        'id_reservas' => $row['id_reservas'],
        'id_habitacion' => $row['id_habitacion'],
        'nom_tip_habi' => $row['nom_tip_habi'],
        'nom_cliente' => $row['nom_cliente'],
        'correo_cliente' => $row['correo_cliente'],
        'documento' => $row['documento'],
        'fecha_ingreso' => $row['fecha_ingreso'],
        'fecha_salida' => $row['fecha_salida']
    );
}

echo json_encode($json);
return;

?>