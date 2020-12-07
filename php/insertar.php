<?php
    require_once './baseDatos.php';
if(isset($_POST)){
    $tip_documento = $_POST['tip_docum'];
    $documento = $_POST["documentoo"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $telefonos = $_POST["telefonos"];
    $correos = $_POST["correos"];
    $password = $_POST["passwords"];

    $consulta = "SELECT * from usuario where documento = '$documento'";
    $query = mysqli_query($base, $consulta);
    $db = mysqli_fetch_assoc($query);

    if(empty($db)){
        $consulta1 = "INSERT into usuario(documento,nombre,apellido,telefono,correo,id_tip_usu,id_tip_docu,password)
        values('{$documento}','{$nombres}','{$apellidos}','{$telefonos}','{$correos}', 1 ,'{$tip_documento}','{$password}' )";
        $query1 = mysqli_query($base , $consulta1);

        if($query1){
            echo json_encode("ok");
        }else{
            echo json_encode("errorcreacion");
        }
    }else{
        echo json_encode("usuarioregistrado");
    }
}


?>