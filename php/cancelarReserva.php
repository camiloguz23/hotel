<?php
require_once('baseDatos.php');

if(isset($_POST)) {
    $id = $_POST['id'];
    $idDocumento = $_POST['idDocumento'];

    $habitaciones = "SELECT * FROM habitacion, reservas WHERE habitacion.id_habitacion = reservas.id_habitacion AND reservas.documento = '$idDocumento' AND reservas.id_habitacion = '$id'";
    $query1 = mysqli_query($base, $habitaciones);
    $fila = mysqli_fetch_assoc($query1);

    $noHabiDisponible = $fila['disponibles_habi'] + 1;

    $sumarHabi = "UPDATE habitacion SET disponibles_habi = '$noHabiDisponible' WHERE habitacion.id_habitacion = '$id'";
    $query2 = mysqli_query($base, $sumarHabi);

    $borrar = "DELETE FROM reservas WHERE reservas.id_habitacion = '$id' AND reservas.documento = '$idDocumento'";
    $query = mysqli_query($base, $borrar);

    echo "Se ha borrado correctamnete";
}
?>