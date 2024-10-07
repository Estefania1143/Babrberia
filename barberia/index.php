<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Añadir scroll suave */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    
    <header class="header"> 
        <div class="menu container">
            <label for="menu"></label>
            <nav class="navbar">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#productos">Productos</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container" id="inicio">
            <h2 class="welcome">WELCOME TO</h2>
            <h1 class="titulo">THE BARBER SHOP JACK</h1>
        </div>
    </header>

    <div class="logo-1">
        <div class="logo-content container">
            <img class="logo" src="imagenes/Logo Barberia Circular Vintage Negro y Dorado.png" alt="Barbería Jack Logo">
            <div class="texto-barberia" id="nosotros">
                <h3>Barbería Jack</h3>
                <p>Barbería Jack fue fundada en 2009 con el compromiso de ofrecer un servicio de alta calidad y atención 
                personalizada a cada cliente. Durante todos estos años, nos hemos destacado por crear una experiencia única 
                en cortes y estilos, adaptándonos a las necesidades de hombres, mujeres y niños. Con un equipo de profesionales 
                apasionados y dedicados, seguimos elevando los estándares del servicio de barbería en la comunidad.</p>
            </div>
        </div>
    </div>
    
    <section class="barber">
        <div class="barber-content container">
            <img class="ymg" src="imagenes/moeee.jpg" alt="Imagen de fondo">
            <div class="overlay">
                <div class="barber-group">
                    <div class="barber-1"></div>
                    <div class="barber-1"></div>
                </div>
                <h3>¡Transforma tu estilo hoy mismo!</h3> 
                <p>
                    Visita a nuestros expertos barberos y descubre el corte que realza tu personalidad. 
                    Relájate con tu música favorita y disfruta de una bebida refrescante mientras te atendemos.
                </p>
                <a href="#" class="btn">Información</a>
            </div>
        </div>
    </section>

    <h2 class="tipos" id="servicios">Servicios</h2>
    <section class="cortes">
        <div class="cortes-content container">
            <div class="cortes-1">
                <img src="imagenes/cabello.jpg" alt="Corte de barba">
                <h3>Cabello</h3>
            </div>
            <div class="cortes-1">
                <img src="imagenes/barba.jpg" alt="Corte de cabello">
                <h3>Barba</h3>
            </div>
            <div class="cortes-1">
                <img src="imagenes/cejas.jpg" alt="Corte de cejas">
                <h3>Cejas</h3>
            </div>
            <div class="cortes-1">
                <img src="imagenes/tinte.jpg" alt="Tinte de barba">
                <h3>Tintes</h3>
            </div>
        </div>
    </section>

    <section class="servicios" id="servicios">
        <div class="servicios-content container">
            <h2 class="servicioss">Diferentes tipos de cortes</h2>
            <div class="servicios-group">
                <div class="servicios-1">
                    <img src="imagenes/niñ.jpg" alt="">
                    <h3>Niños</h3>
                </div>
                <div class="servicios-1">
                    <img src="imagenes/meje.jpg" alt="">
                    <h3>Mujeres</h3>
                </div>
                <div class="servicios-1">
                    <img src="imagenes/caballero.jpg" alt="">
                    <h3>Hombres</h3>
                </div>
            </div>
        </div>
    </section>

    <div class="product" id="productos">
        <div class="product-content container">
            <h2 class="product-title">Productos</h2>
            <div class="product-group">
                <div class="product-1">
                    <img src="imagenes/pomada1.jpg" alt="Aceite para barba">
                    <h3>Pomada capilar</h3>
                </div>
                <div class="product-1">
                    <img src="imagenes/pomada2.jpg" alt="Crema para barba">
                    <h3>Crema de peinar</h3>
                </div>
                <div class="product-1">
                    <img src="imagenes/pomada 3.jpg" alt="Gel para barba">
                    <h3>Gel</h3>
                </div>
                <div class="product-1">
                    <img src="imagenes/pomada 4.webp" alt="Acondicionador para barba">
                    <h3>Acondicionador</h3>
                </div>
                <div class="product-1">
                    <img src="imagenes/pomada5.png" alt="Minoxidil para barba">
                    <h3>Minoxidil</h3>
                </div>
            </div>
        </div>
    </div>

    <p class="parrafo">
        En Barbería Jack, nos enorgullecemos de ofrecer una experiencia única y personalizada en el cuidado masculino. 
        Desde nuestro inicio, hemos buscado combinar lo mejor de la tradición clásica con las tendencias más modernas, 
        creando un ambiente donde cada cliente se siente especial y bien atendido.
    </p>

    <div class="reserva">
        <div class="ima-1">
            <h3>¡No eres feo, simplemente tienes un mal corte!</h3>
            <div class="btn-container">
                <button class="btn-1">¡RESERVA AHORA!</button>
                <button class="btn-1">CONOZCA EL EQUIPO</button>
            </div>
        </div>
    </div>

    <footer class="footer" id="contacto">
        <div class="footer-content container">
            <div class="link">
                <h3>Contáctanos</h3>
                <ul>
                    <li><a href="#">Teléfono: 3186270552</a></li>
                    <li><a href="#">Whatsapp: 3186270552</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Visítanos</h3>
                <ul>
                    <li><a href="#">Carrera 75A #107A-57</a></li>
                    <li><a href="#">Medellín, Antioquia, Colombia</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Horario</h3>
                <ul>
                    <li><a href="#">Lunes a Sábados: 8am - 10pm</a></li>
                    <li><a href="#">Domingo 10am - 5pm</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <section class="formulario container">
    <form method="POST" action="send.php">
        <h2>¡Agenda ya!</h2>

        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-container">
                <input type="number" name="celular" placeholder="Numero Celular">
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="input-container">
                <input type="datetime-local" name="fecha" placeholder="Fecha y hora">
                <i class="fa-solid fa-clock"></i>
            </div>

            <input type="submit" name="send" class="btn">
        </div>
    </form>
</section>


    <?php
    include "send.php";
?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/barberia"
        }
    </script>

</body>
</html>
