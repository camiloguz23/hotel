<?php

require_once('baseDatos.php');

if(isset($_POST)) {

    $post = (isset($_POST['idHabitacion']) && !empty($_POST['idHabitacion'])) &&
            (isset($_POST['idTipHabitacion']) && !empty($_POST['idTipHabitacion'])) &&
            (isset($_POST['noPersonas']) && !empty($_POST['noPersonas'])) &&
            (isset($_POST['habiDisponibles']) && !empty($_POST['habiDisponibles']));


    if($post) {
        $idHabitacion = $_POST['idHabitacion'];
        $idTipHabitacion = $_POST['idTipHabitacion'];
        $noPersonas = $_POST['noPersonas'];
        $habiDisponibles = $_POST['habiDisponibles'];

        $consulta = "INSERT INTO habitacion (id_habitacion, id_tipo_habi, numero_personas, num_habitaciones, disponibles_habi) VALUES ('$idHabitacion', '$idTipHabitacion', '$noPersonas', '$habiDisponibles', '$habiDisponibles')";
        $query = mysqli_query($base, $consulta);

        if(!$query) {
            die("Consulta fallida" . mysqli_error($base)); 
        }

        echo "Se ha creado correctamente";
    } else {
        echo "Los campos no pueden estar vacios";
    }
}

?>