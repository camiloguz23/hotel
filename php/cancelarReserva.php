<?php
require_once('baseDatos.php');

if(isset($_POST)) {
    $id = $_POST['id'];

    $borrar = "DELETE FROM reservas WHERE reservas.id_habitacion = '$id'";
    $query = mysqli_query($base, $borrar);

    echo "Se ha borrado correctamente la reservación";
}
?>