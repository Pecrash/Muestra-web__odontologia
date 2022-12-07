<?php require('./components/header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuestraOdontología</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <section class="secPrincipal">
        <img src="./assets/ImagenPrincipal-1.svg" alt="">
        <article class="secPrincipal__tittle">
            <h1 class="bold">Obtén tu mejor sonrisa</h1>
            <h1 class="regular">Clínica Especializada</h1>
        </article>
        <p class="secPrincipal__parrafo">
            En nuestra clínica odontológica contamos con equipos de alta tecnología para
            brindar los mejores tratamientos
            odontológicos, un excelente servicio técnico y profesional, ya su vez un ambiente seguro y tranquilo.
        </p>
        <button class="secPrincipal__btn">QUIERO AGENDAR MI CITA</button>
    </section>

    <section class="secConoceMas">
        <article class="secConoceMas__tittle">
            <h1 class="bold">Conoce más sobre</h1>
            <h1 class="regular">Dental Clinic</h1>
        </article>
        <p class="secConoceMas__parrafo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nulla incidunt
            hic explicabo voluptate,
            sapiente, quo numquam soluta delectus reprehenderit quod vel.
        </p>
        <p class="secConoceMas__hidden" id="hidden">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum recusandae ea, quisquam distinctio ad
            quis quam velit impedit deleniti, dolores eligendi. Perferendis non error odio ipsa nulla sapiente
            reiciendis explicabo!
        </p>
        <article class="leer-mas">
            <p id="read">leer más</p>
        </article>
    </section>

    <section class="secOdontologia">
        <h1 class="bold secOdontologia__tittle">Servicios Especializados</h1>
        <article class="secOdontologia__servicio">
            <img src="./assets/Iconos_dientes/healthy-teeth.svg" alt="">
            <h2>Odontogía General</h2>
            <p>Placeat fugit, consequatur quidem ad unde quasi voluptatibus.</p>
        </article>
        <article class="secOdontologia__servicio">
            <img src="./assets/Iconos_dientes/shiny-tooth.svg" alt="">
            <h2>Estética Dental</h2>
            <p>Placeat fugit, consequatur quidem ad unde quasi voluptatibus.</p>
        </article>
        <article class="secOdontologia__servicio">
            <img src="./assets/Iconos_dientes/braces.svg" alt="">
            <h2>Ortodoncia</h2>
            <p>Placeat fugit, consequatur quidem ad unde quasi voluptatibus.</p>
        </article>
        <article class="secOdontologia__servicio">
            <img src="./assets/Iconos_dientes/tooth-extraction.svg" alt="">
            <h2>Cirugía Oral</h2>
            <p>Placeat fugit, consequatur quidem ad unde quasi voluptatibus.</p>
        </article>
    </section>

    <section class="secTuSonrisa">
        <img src="./assets/imagenPrincipal-2.svg" alt="">
        <article class="secTuSonrisa__tittle">
            <h1 class="bold">Amas tu sonrisa</h1>
            <h1 class="regular">te ayudamos a cuidarla</h1>
        </article>
        <p class="secTuSonrisa__parrafo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam necessitatibus qui placeat aut. Fugiat,
            quae? Consequatur debitis, ipsam quos neque eos, nihil placeat nesciunt, perferendis totam omnis doloribus
            atque ad.
        </p>
    </section>

    <footer class="secFooter">
        <img src="./assets/IconDental.png" alt="" class="secFooter__logo">
        <h2 class="secFooter__redes-tittle">Redes Sociales</h2>

        <section class="secFooter__iconos">
            <img src="./assets/Redes/facebook.svg" alt="">
            <img src="./assets/Redes/instagram.svg" alt="">
            <img src="./assets/Redes/twitter.svg" alt="">
        </section>

        <section class="secFooter__nav">
            <a href="#">Nosotros</a>
            <a href="#">Especialidades</a>
            <a href="#">Nuestro Equipo</a>
            <a href="#">Entérate</a>
            <a href="#">Contáctanos</a>
        </section>

        <section class="secFooter__contacto">
            <h2 class="secFooter__contacto-tittle">Contacto</h2>
            <p class="secFooter__contacto-parrafo">
                pecrash12@gmail.com <br>
                +57 3044376024
            </p>
        </section>

    </footer>
    <script src="./src/index.js"></script>
</body>

</html>