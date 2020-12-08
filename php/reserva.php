<?php
require_once("baseDatos.php");

$documento =$_POST["documentoReser"];
$nombre = $_POST["nombreCliente"];
$tipoHabi = $_POST["habitacion"];
$correo = $_POST["correo"];
$fechaIngre = $_POST["fechaIngreso"];
$fechaSali = $_POST["fechaSalida"];


    $consulta = "INSERT INTO reservas (documento,nom_cliente,correo_cliente,id_habitacion,fecha_ingreso,fecha_salida) values ('$documento','$nombre','$correo','$tipoHabi','$fechaIngre','$fechaSali')";
    $sql = mysqli_query($base,$consulta);

    if ($sql) {
        
        $consultaDos = "SELECT disponibles_habi from habitacion where id_habitacion = $tipoHabi";
        $aqlDos = mysqli_query($base,$consultaDos);
        $datoDos = mysqli_fetch_assoc($aqlDos);
        if ($aqlDos) {
            $valor = $datoDos["disponibles_habi"] - 1;
            $actualizar = "UPDATE `habitacion` SET `disponibles_habi` = '$valor' WHERE `habitacion`.`id_habitacion` = $tipoHabi";
            $sqlactu = mysqli_query($base,$actualizar);

            if ($sqlactu) {
                echo "exito";
            }else{
                echo "tercera mal";
            }
        }else{
            echo "error en la segunda";
        }
    }else{
        echo "error en la primera";
    }




?>