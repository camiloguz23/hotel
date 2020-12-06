<?php
require_once("baseDatos.php");

if(isset($_POST)){
    $correo = $_POST["email"];
    $contra = $_POST["password"];
    
    $consulta = "SELECT * from usuario where correo='$correo' and password = '$contra'";
    $query = mysqli_query($base , $consulta);
    $db = mysqli_fetch_assoc($query);
    if(!empty($db)){
        
        $_SESSION['tip_usua'] = $db['id_tip_usu'];
        $_SESSION['id_usua'] = $db['documento'];

        if($_SESSION['tip_usua']== 1){
            header("location: ../html/administrador/administrador.html");
            exit();
        }
    }else{
        echo '<script>alert("el usuario no existe en nuestra base de datos");</script>';
        echo '<script>window.location = "../index.html"</script>';
    }

?>