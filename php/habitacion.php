<?php
require_once("baseDatos.php");

$consulta = "SELECT habitacion.*,tipo_habitacion.nom_tip_habi FROM habitacion, tipo_habitacion WHERE habitacion.id_tipo_habi=tipo_habitacion.id_tipo_habi";
$sql= mysqli_query($base,$consulta);
$dato = mysqli_fetch_assoc($sql);

while ($dato = mysqli_fetch_assoc($sql)) {
    echo("<option value=".$dato["id_habitacion"].">".$dato["nom_tip_habi"]."</option><br>");
}

?>