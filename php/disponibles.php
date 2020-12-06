<?php
require_once("baseDatos.php");

$habi = $_POST["habiking"];

$consulta = "SELECT * from habitacion where id_habitacion = '$habi'";
$sql = mysqli_query($base,$consulta);
$datohabi = mysqli_fetch_assoc($sql);

if ($sql) {
    $disponible = $datohabi["disponibles_habi"];
    echo $disponible;

}
?>