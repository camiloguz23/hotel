<?php

require_once('baseDatos.php');

if(isset($_POST)) {

    $post = (isset($_POST['idTipoHabi']) && !empty($_POST['idTipoHabi'])) &&
            (isset($_POST['idNomTipHabitacion']) && !empty($_POST['idNomTipHabitacion']));

    if($post) {

        $idTipoHabi = $_POST['idTipoHabi'];
        $idNomTipHabitacion = $_POST['idNomTipHabitacion'];
        $consulta = "INSERT INTO tipo_habitacion (id_tipo_habi, nom_tip_habi) VALUES ('$idTipoHabi', '$idNomTipHabitacion')";
        $query = mysqli_query($base, $consulta);

        echo "Se ha creado correctamente";

    } else {
        echo "Los campos no pueden estar vacios";
    }
}


?>