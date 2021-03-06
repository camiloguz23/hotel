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
    <div class="flotante" id="flotante">
        <div class="contenido_flotante">
            <div class="cerrar_flotante">
                <i class="fa fa-times-circle-o" aria-hidden="true" id="cerrarFlotante"></i>
            </div>
            <div class="titulo_flotante">
                <h4>Editar habitación</h4>
            </div>
            <form id="form_editar">
                <div class="grupo_flotante grupo_personas">
                    <label for="noPersonas">Número de personas - opcional</label>
                    <input type="number" id="noPersonas" name="noPersonas">
                </div>
                <div class="grupo_flotante grupo_habitaciones">
                    <label for="noHabitaciones">Número de habitaciones</label>
                    <input type="number" id="noHabitaciones" name="noHabitaciones">
                </div>
                <div class="grupo_boton-flotante">
                    <input type="submit" id="btn_flotante" name="btn_flotante" value="Editar">
                </div>
            </form>
        </div>
    </div>
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
                        <h2>HABITACIONES</h2>
                    </div>
                    <table id="habi_dispo">
                        <tr>
                            <th>ID</th>
                            <th>Tipo de habitación</th>
                            <th>No. Personas</th>
                            <th>No. Habitaciones</th>
                            <th>Habitaciones disponibles</th>
                            <th>Acciones</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script src="../../javascript/administrador.js"></script>
</body>
</html>