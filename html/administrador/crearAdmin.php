<?php
session_start();
if ($_SESSION['id_usua'] == "" & $_SESSION['id_usua'] == null) {
    header("location: ../../index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../../css/administrador.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a90c49b6b2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Fuente Family Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="name_administrador">
            <h4>Sistema Habitaciones</h4>
        </div>
        <div class="box_btn">
            <button id="cerrarsesion">Cerrar Sesión</button>
        </div>
    </header>
    <main>
        <div class="contenedor">
            <nav>
                <div class="nav">
                    <div class="info_admin">
                        <div class="foto_admin">
                            <h4>Bienvenido, Administrador</h4>
                            <p><?=$_SESSION["nombre"]?> <?=$_SESSION["apellido"]?></p>
                        </div>
                    </div>
                    <div class="navegacion">
                       <a href="administrador.php">Habitaciones</a>
                       <a href="habi_ocu.php">Reservaciones</a>
                       <a href="crearHabi.php">Crear habitaciones</a>
                       <a href="crearTipo.php">Crear tipo de habitación</a>
                       <a href="crearAdmin.php">Crear administrador</a>
                    </div>
                </div>
            </nav>
            <div class="box_contenido">
                <div class="contenido">
                    <div class="titulo">
                        <h2>CREAR ADMINISTRADOR</h2>
                    </div>
                    <form id="forreg" class="forreg">
                        <legend>FORMULARIO DE REGISTRO</legend>
                        <!-- tipo de documento -->
                        <label for="tip_docu">tipo de documento</label>
                        <select name="tip_docum" id="tip_docu">
                            <option value="1">cedula de ciudadania</option>
                            <option value="2">tarjeta de identidad</option>
                        </select>
                        <!--documento-->
                        <label for="documento">documento</label>
                        <input type="text" name="documentoo" class="documento" id="documento"
                         placeholder="Escribe tu documento" title="solo acepta numeros y maximo 14 diguitos" 
                         pattern="^\d{7,14}$" required>
                        <!-- nombres  -->
                        <label for="nombre">Nombres</label>
                        <input type="text" name="nombres" id="nombre" class="nombres" 
                        pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" placeholder="Escribe tus nombre" 
                        title="solo acepta letras y espacios en blanco" required>
                         <!-- apellidos  -->
                         <label for="apellido">apellidos</label>
                         <input type="text" name="apellidos" id="apellido" class="apellidos" 
                         pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" placeholder="Escribe tus apellidos"
                         title="solo acepta letras y espacios en blanco" required>
                         <!--telefono-->
                         <label for="telefono">telefono</label>
                         <input type="text" name="telefonos" id="telefono" class="telefono" 
                         pattern="^\d{7,14}$" placeholder="Escribe tu telefono" 
                          title="solo acepta numeros"  required>
                         <!-- correo-->
                         <label for="correo">correo</label>
                         <input type="text" name="correos" id="correo" class="correo"
                          pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$"
                          placeholder="Escribe  tu correo" 
                          title="debes introducir un corrreo valido" required>
                          <!--password-->
                          <label for="password">password</label>
                          <input type="text" name="passwords" id="password" class="password" 
                         placeholder="Escribe tu pasword" pattern="^.{4,12}$"
                         title="la contraseña debe tener minimo 4 diguitos y maximo 12 caracteres" required>
            
                          <input type="submit" id="enviar" class="enviar">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="../../javascript/administrador.js"></script>
</body>
</html>