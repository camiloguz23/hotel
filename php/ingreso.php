<?php
require_once("baseDatos.php");

$correo = $_POST["email"];
$contra = $_POST["password"];

$consulta = "SELECT * from usuario where correo = '$correo' and password = '$contra'";
$sql = mysqli_query($base,$consulta);

if ($sql) {
    echo 1;
}
?>