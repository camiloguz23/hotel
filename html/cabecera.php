<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/habitaciones.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
            <div class="encabezado">
                <div class="main_encabezado">
                    <div class="encabezado_1">
                        <div class="barras">
                            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            <a href="index.html"><h4>HYATT</h4></a>
                        </div>
                    </div>
                    <div class="encabezado_2">
                        <div class="wordH">
                            <a href="#">World of Hyatt</a></div>
                        <div class="iniciarS">
                            <a href="#" id="iniciarSesion">Iniciar Sesión <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <div class="submenu" id="submenuIniciar">
                                <form action="../php/ingreso.php" class="formIniciar" method="POST">
                                    <div class="grupo_email">
                                        <label for="email">Correo électronico</label>
                                        <input type="email" name="email" id="email" placeholder="Ingrese su email">
                                    </div>
                                    <div class="grupo_password">
                                        <label for="password">Contraseña</label>
                                        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                                    </div>
                                    <input type="submit" class="btn_iniciar" value="Iniciar Sesión">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menubox">
                    <div class="reservar">
                        <div class="reservar1">
                            <p>Grand Hyatt, Bogotá</p>
                        </div>
                        <div class="reservar1 reservar2">
                            <a href="#" id="btn_reservar">RESERVAR AHORA</a>
                        </div>
                    </div>
                    <div class="navegacion">
                        <div>
                            <a href="../index.html">HOTEL</a>
                        </div>
                        <div>
                            <a href="../html/habitaciones.html">HABITACIONES</a>
                        </div>
                        <div>
                            <a href="../html/fotos_op.php">FOTOS Y OPINIONES</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script src="../javascript/submenu.js"></script>
</body>
</html>