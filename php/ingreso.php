<?php
require_once("baseDatos.php");

$correo = $_POST["email"];
$contra = $_POST["password"];

echo ("este es mi correo".$correo."este es mi contra".$contra);
?>