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
            </nav>
            <div class="accesibilidad-panel">
                
                <button class="btn-1" onclick="enableScreenReader()">Lector de Pantalla</button>
            </div>
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
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3> Dermatologia</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Ginecologia</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Endocrinologia</h3>
            </div>
        </div>
    </main>
    <section class="formulario" id="Contacto">
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
    </footer>
    <?php
        include("send.php");
    ?>
    <script>
        /*window.toggleContrast = function () {
        document.body.classList.toggle("high-contrast");
        localStorage.setItem("highContrast", document.body.classList.contains("high-contrast"));
    };

    window.toggleFontSize = function () {
        document.body.classList.toggle("large-text");
        localStorage.setItem("largeText", document.body.classList.contains("large-text"));
    };*/

    window.enableScreenReader = function () {
        window.speechSynthesis.cancel();
        let text = document.body.innerText;
        let speech = new SpeechSynthesisUtterance(text);
        speech.lang = "es-ES";
        speech.rate = 1;
        window.speechSynthesis.speak(speech);
    };
    </script>
    <script src="//code.tidio.co/ijxd09hxktgpv5u7k818ufa8pec3ek5n.js" async></script>
</body>

</html>