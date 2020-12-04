<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/fotos_op.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a90c49b6b2.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require "./cabecera.php";
    ?>
    <main>
        <figure class="img">
            <img src="../img/imgg.webp" alt="imgg">
        </figure>
        <nav class="menu2">
            <a href="#">Descripsion</a>
            <a href="#">Fotos y opiniones</a>
            <a href="#">Mapas , Parqueadero + Transporte</a>
            <a href="#">Noticias + Eventos</a>
            <a href="#">Politicas</a>
        </nav>

        <section class="fo">
            <h2>Fotos y opiniones</h2>
            <article>Considérelo su nueva guía de viajes. Aquí puede ver cómo nuestros huéspedes disfrutan de la vida.</article>
            <div class="imagenes">
                <figure>
                    <img src="../img/yootube.jpg" alt="yootube">
                    <img src="../img/instagram.jpg" alt="instagram">
                    <img src="../img/facebook.png" alt="facebook">
                </figure>
            </div>
        </section>
        <!-- <section class="gr">
            <a href="#">Galeria</a>
            <a href="#">Repaso</a>
        </section>
        <section class="gr1">
            <div class="btns">
                <button>Todos</button>
                <button>Hotel</button>
                <button>Habitaciones</button>
                <button>Suites</button>
                <button>Restaurantes</button>
                <button>Spa</button>
                <button>Piscina</button>
            </div>
            <figure class="img">
                <img src="../img/yootube.jpg" alt="yootube">
            </figure> -->
        </section>
        <!-- hotel  -->
        <section class="foh">
            <h2>HOTEL</h2>
            <figure>
                <img src="../img/hotel1.webp" alt="hotel1">
            </figure>
            <figure>
                <img src="../img/hotel2.webp" alt="hotel2">
            </figure>
            <figure>
                <img src="../img/hotel3.webp" alt="hotel3">
            </figure>
            <figure>
                <img src="../img/hotel4.webp" alt="hotel4">
            </figure>
        </section>
        <!-- habitaciones  -->
        <section class="foh">
        <h2>Habitaciones</h2>
            <figure>
                <img src="../img/habitaciones1.webp" alt="habitaciones1">
            </figure>
            <figure>
                <img src="../img/habitaciones2.webp" alt="habitaciones2">
            </figure>
            <figure>
                <img src="../img/habitaciones3.webp" alt="habitaciones3">
            </figure>
        </section>
        <!-- suites  -->
        <section class="foh">
        <h2>Suites</h2>
            <figure>
                <img src="../img/suites1.webp" alt="suites1">
            </figure>
            <figure>
                <img src="../img/suites2.webp" alt="suites2">
            </figure>
            <figure>
                <img src="../img/suites3.webp" alt="suites3">
            </figure>
            <figure>
                <img src="../img/suites4.webp" alt="suites4">
            </figure>
            <figure>
                <img src="../img/suites5.webp" alt="suites5">
            </figure>
        </section>
        <!-- restaurantes -->
        <section class="foh">
        <h2>Restaurantes</h2>
            <figure>
                <img src="../img/restaurantes1.webp" alt="restaurantes1">
            </figure>
            <figure>
                <img src="../img/restaurantes2.webp" alt="restaurantes2">
            </figure>
            <figure>
                <img src="../img/restaurantes3.webp" alt="restaurantes3">
            </figure>
            <figure>
                <img src="../img/restaurantes4.webp" alt="restaurantes4">
            </figure>
            <figure>
                <img src="../img/restaurantes5.webp" alt="restaurantes5">
            </figure>
        </section>
        <!-- piscinas -->
        <section class="foh">
            <h2>Piscinas</h2>
        <figure>
                <img src="../img/piscina.webp" alt="piscina">
            </figure>
        </section>
    </main>
    <?php
        require "./footer.php";
    ?>
    <script src="../javascript/fotos_op.js" type="module"></script>
</body>
</html>