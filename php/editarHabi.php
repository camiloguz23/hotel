<?php

require_once('baseDatos.php');

if($_POST) {

    $post = (isset($_POST['idhabi']) && !empty($_POST['idhabi'])) &&
            (isset($_POST['noHabitaciones']) && !empty($_POST['noHabitaciones']));

    if($post) {
        $idhabi = $_POST['idhabi'];
        $noHabitaciones = $_POST['noHabitaciones'];

        $consulta = "SELECT * FROM habitacion WHERE id_habitacion='$idhabi'";
        $query = mysqli_query($base, $consulta);
        $fila = mysqli_fetch_assoc($query);

        $noHabiBd = $fila['num_habitaciones'];
        $noHabiDisponibles = $fila['disponibles_habi'];

        if($noHabitaciones > $noHabiBd) {

            $operacion = $noHabitaciones - $noHabiBd;
            $operacion2 = $operacion + $noHabiDisponibles;

            if(isset($_POST['noPersonas']) && !empty($_POST['noPersonas'])) {
                $noPersonas = $_POST['noPersonas'];

                $consulta1 = "UPDATE habitacion SET numero_personas = '$noPersonas', num_habitaciones = '$noHabitaciones', disponibles_habi = '$operacion2' WHERE habitacion.id_habitacion = '$idhabi'";
                $query1 = mysqli_query($base, $consulta1);

                echo "Los cambios se han hecho correctamente";
            } else {

                $consulta1 = "UPDATE habitacion SET num_habitaciones = '$noHabitaciones', disponibles_habi = '$operacion2' WHERE habitacion.id_habitacion = '$idhabi'";
                $query1 = mysqli_query($base, $consulta1);

                echo "Los cambios se han hecho correctamente";
            }

        } else if ($noHabitaciones < $noHabiBd){

            $operacion = $noHabiBd - $noHabitaciones;
            $operacion2 = $noHabiDisponibles - $operacion;
            
            if($operacion2 < 0) {
                echo "El número de habitaciones es menor a las habitaciones ya reservadas";
            } else {
                if(isset($_POST['noPersonas']) && !empty($_POST['noPersonas'])) {
                    $noPersonas = $_POST['noPersonas'];
    
                    $consulta1 = "UPDATE habitacion SET numero_personas = '$noPersonas', num_habitaciones = '$noHabitaciones', disponibles_habi = '$operacion2' WHERE habitacion.id_habitacion = '$idhabi'";
                    $query1 = mysqli_query($base, $consulta1);
    
                    echo "Los cambios se han hecho correctamente";
                } else {
    
                    $consulta1 = "UPDATE habitacion SET num_habitaciones = '$noHabitaciones', disponibles_habi = '$operacion2' WHERE habitacion.id_habitacion = '$idhabi'";
                    $query1 = mysqli_query($base, $consulta1);
    
                    echo "Los cambios se han hecho correctamente";
                }
            }
        }
    } else {
        echo "El número de habitaciones no puede estar vacío";
    }
}

?>