<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
<header class="header" id="Inicio">
        <div class="menu">
            <div class="logo">
                <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
            </div>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#Inicio">Inicio</a></li>
                    <li><a href="#Nosotros">Nosotros</a></li>
                    <li><a href="#Servicios">Servicios</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
                <button onclick="cambiarTamanioTexto()" title="Agrandar Letra">
                    <i class="fas fa-text-height"></i> <!-- Icono para agrandar letra -->
                </button>
                <button onclick="toggleModoOscuro()" title="Modo Oscuro">
                    <i class="fas fa-moon"></i> <!-- Icono para modo oscuro -->
                </button>
            </nav>
        </div>
        <div class="header-content">
            <div class="header-left">
                <h1>Centro Médico de la Mujer</h1>
                <p>
                    En nuestro centro, tu salud es lo primero.<br>
                    Realízate tus chequeos anuales.
                </p>
                <a href="#Contacto" class="btn-1">Agenda una consulta</a>
            </div>
            <div class="header-right">
                <img src="img/left.png" alt="imagen médica">
            </div>
        </div>
    </header>
    <section class="about" id="Nosotros">
        <div class="about-img">
            <img src="img/about.png" alt="">
        </div>
        <div class="about-text">
            <h2>Nosotros</h2>
            <p>Centro Médico de la Mujer es el centro de atención médica para la mujer más confiable de la
                región. Contamos con un equipo de expertos médicos altamente capacitados, instalaciones
                modernas,  tecnologias innovadoras como la IA que nos ayuda en los diagnosticos  y un
                compromiso inquebrantable con el bienestar de nuestros pacientes.
            </p>
        </div>
    </section>    
    <main class="servicios" id="Servicios">
    <h2>Servicios</h2>
    <div class="servicios-content">
        <div class="servicio-1" onclick="mostrarEspecialidad('dermatologia')">
            <i class="fa-sharp fa-solid fa-stethoscope"></i>
            <h3>Dermatologia</h3>
        </div>
        <div class="servicio-1" onclick="mostrarEspecialidad('ginecologia')">
            <i class="fa-solid fa-hospital"></i>
            <h3>Ginecologia</h3>
        </div>
        <div class="servicio-1" onclick="mostrarEspecialidad('endocrinologia')">
            <i class="fa-sharp fa-solid fa-hospital-user"></i>
            <h3>Endocrinologia</h3>
        </div>
    </div>
    <div id="info-dermatologia" class="info-especialidad" style="display: none;">
        <div class="fondo-translucido">
            <img src="img/dermatologia.png" alt="Dra. Dermatología">
            <p>Dra. María López</p>
            <p>Especialidad: Dermatología</p>
            <p>Matrícula: 12345</p>
        </div>
    </div>
    <div id="info-endocrinologia" class="info-especialidad" style="display: none;">
        <div class="fondo-translucido">
            <img src="img/endocrinologia.png" alt="Dra. Endocrinologia">
            <p>Dra. Sandra Khorn</p>
            <p>Especialidad: Endocrinologia</p>
            <p>Matrícula: 45612</p>
        </div>
    </div>
    <div id="info-ginecologia" class="info-especialidad" style="display: none;">
        <div class="fondo-translucido">
            <img src="img/ginecologia.png" alt="Dra. Ginecologia">
            <p>Dra. Patricia Zed</p>
            <p>Especialidad: Ginecologia</p>
            <p>Matrícula: 65325</p>
        </div>
    </div>
</main>
<section class="formulario" id="Contacto">
    <div class="formulario-contenedor">
        <form action="send.php" method="post" autocomplete="off">
            <h2>Agenda tu Consulta</h2>
            <br>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Numero de telefono">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="mensaje" placeholder="Detalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onClick="myfunction()">
            </div>
        </form>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.102370777536!2d-65.3053846849681!3d-26.83672208316093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225d3ad7f30f1d%3A0xf8606cd659b8e3e4!2sAconquija%20123%2C%20Yerba%20Buena%2C%20Tucum%C3%A1n!5e0!3m2!1ses!2sar!4v1620830000000!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
    <footer class="footer">
        <div class="footer-content">
            <div class="logo">
                <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
                <div>
                    <h3>Centro Medico de la Mujer</h3>
                </div>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#Inicio">Inicio</a></li>
                    <li><a href="#Nosotros">Nosotros</a></li>
                    <li><a href="#Servicios">Servicios</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="contacto">
                <ul>
                    <h5>Direccion: </h5>
                    <li >Aconquija 123, Yerba Buena</li>
                    <h5>Email: </h5>
                    <li>atencion@centrodelamujer.com</li>
                    <h5>Telefono: </h5>
                    <li>(381) 1234 5678</li>
                </ul>
            </div>
        </div>
        <div class="footer-registro">
        <p>© 2023 Creado por Daniela Araujo. Todos los derechos reservados.</p>
        <div class="footer-social">
            <a href="https://github.com/Da1112" target="_blank" title="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/daniela-araujo-05a236263/" target="_blank" title="LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
    </footer>
    <script src="//code.tidio.co/ijxd09hxktgpv5u7k818ufa8pec3ek5n.js" async></script>
    <script>
    function toggleModoOscuro() {
            document.body.classList.toggle("modo-oscuro");
        }

        function cambiarTamanioTexto() {
            document.body.classList.toggle("texto-grande");
        }
        function mostrarEspecialidad(especialidad) {
    // Oculta todas las especialidades primero
    document.querySelectorAll('.info-especialidad').forEach(function (info) {
        info.style.display = 'none';
    });

    // Muestra la especialidad seleccionada
    var info = document.getElementById(`info-${especialidad}`);
    if (info) {
        if (info.style.display === 'block') {
            info.style.display = 'none'; // Si ya está visible, lo oculta
        } else {
            info.style.display = 'block'; // Si no está visible, lo muestra
        }
    }
}

// Agrega un evento de clic a cada imagen para abrirla en una ventana flotante
document.querySelectorAll('.info-especialidad img').forEach(function (img) {
    img.addEventListener('click', function () {
        // Crea la ventana flotante
        var ventanaFlotante = document.createElement('div');
        ventanaFlotante.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro traslúcido */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1001; /* Asegura que la ventana esté por encima de todo */
        `;

        // Crea el contenedor de la imagen dentro de la ventana flotante
        var contenedorImagen = document.createElement('div');
        contenedorImagen.style.cssText = `
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        `;

        // Clona la imagen y la agrega al contenedor
        var imagenClonada = this.cloneNode(true);
        imagenClonada.style.cssText = `
            max-width: 90%;
            max-height: 90%;
        `;
        contenedorImagen.appendChild(imagenClonada);

        ventanaFlotante.appendChild(contenedorImagen);
        document.body.appendChild(ventanaFlotante);

        // Agrega un evento de clic a la ventana flotante para cerrarla
        ventanaFlotante.addEventListener('click', function () {
            document.body.removeChild(ventanaFlotante);
        });
    });
});
    </script>
    <style>
        .modo-oscuro {
            background-color: #121212;
            color: white;
        }

        .modo-oscuro .header,
        .modo-oscuro .about,
        .modo-oscuro .servicios,
        .modo-oscuro .formulario,
        .modo-oscuro .footer {
            background-color: #121212;
            color: white;
        }

        .modo-oscuro .navbar ul li a,
        .modo-oscuro .link ul li a,
        .modo-oscuro .contacto ul li,
        .modo-oscuro .contacto h5 {
            color: white;
        }

        .texto-grande {
            font-size: 1.6em;
        }

        .texto-grande .header-left h1,
        .texto-grande .header-left p,
        .texto-grande .about-text h2,
        .texto-grande .about-text p,
        .texto-grande .servicios h2,
        .texto-grande .servicio-1 h3,
        .texto-grande .formulario h2,
        .texto-grande .footer h3,
        .texto-grande .link ul li a,
        .texto-grande .contacto ul li {
            font-size: 1.6em;
        }

    </style>
</body>

</html>