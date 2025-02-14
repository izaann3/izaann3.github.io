<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta - IZETA3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/principal.css">
    <link rel="icon" href="../Images/ha.png" type="image/png">
    <script defer src="../js/gotop.js"></script>
    <script src="../js/scroll.js" defer></script>
    <script src="../js/error.js" defer></script>
    <script src="../js/scroll_header.js" defer></script>
    <script src="../js/clickeye.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="../Images/iz3logo.png">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">INICIO</a></li>
                <li><a href="../index.php#music">MÚSICA</a></li>
                <li><a href="valoracion.php">VALORACIONES</a></li>
            </ul>
        </nav>
        <div class="logotwo">
            <?php 
            session_start();
            if (isset($_SESSION['usuario'])) {
                echo '<div class="user-info" id="usuario-logueado">
                    <img src="../Images/login(1).png" alt="Foto de usuario" class="user-icon"> 
                    <span class="username">' . htmlspecialchars($_SESSION['usuario']) . '</span>
                    <a href="../Php/cerrar_sesion.php">
                        <img src="../Images/logout.png" class="cerrasesion">
                    </a>
                </div>';
            } else {
                echo '<a href="inicio_registro.php">
                        <img src="../Images/login(1).png" alt="login"> 
                      </a>';
            }
            ?>
        </div>
        <a class="btn" href="contacto.php"><button>CONTACTO</button></a>
    </header>

    <div class="loader">
        <span class="loader__element"></span>
        <span class="loader__element"></span>
        <span class="loader__element"></span>
    </div>

    <div class="loader">
        <span class="loader__element"></span>
        <span class="loader__element"></span>
        <span class="loader__element"></span>
    </div>

    <video autoplay muted loop id="background-video">
        <source src="../Images/iz3home.mp4" type="video/mp4">
    </video>

    <section id="login" class="contact">
        <h2>REGISTRO</h2>
        <p>Rellene los siguientes datos:</p> 
        <form action="../Php/guardar_registro.php" method="POST">  
            <?php 
            if (isset($_SESSION['error'])) {
                echo '<div class="alert-message error">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            ?>
            <input type="text" name="usuario" placeholder="Usuario" required> 
            <input type="email" name="correo" placeholder="Correo electrónico" required> 
            <div class="password-container">
                <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
                <span class="toggle-password" onclick="togglePasswordVisibility()">
                    <img src="../Images/eye_visible.png" alt="Mostrar contraseña" />
                </span>
            </div>       
            <div class="checkbox">
                <input type="checkbox" name="terminos" id="terminos" required>
                <label for="terminos">Acepto los <a href="terminos.php" target="_blank">términos y condiciones</a></label>
            </div>
            <button type="submit">Registrarse</button> 
        </form> 
    </section>

    <footer>
        <div class="separator"></div>
        <div class="footer-width-fixer">
           <div class="social-icons">
                <a href="https://open.spotify.com/artist/1hSW0fGEl6NnWyHfW1CZ95" target="_blank"><img src="../Images/spotify.png" alt="Spotify"></a>
                <a href="https://www.instagram.com/_.izaann3/" target="_blank"><img src="../Images/insta.png" alt="Instagram"></a>
                <a href="https://www.youtube.com/@_izaann3/" target="_blank"><img src="../Images/yt.png" alt="YouTube"></a>
                <a href="https://music.apple.com/us/artist/izaann3/1647839316" target="_blank"><img src="../Images/apple.png" alt="Apple Music"></a>
            </div>
            <div class="footer-links">
                <a href="terminos.php" class="footer-pages">Términos y condiciones</a>
                <span class="divider">|</span>
                <a href="politica_privacidad.php" class="footer-pages">Políticas de Privacidad</a>
                <span class="divider">|</span>
                <a href="#" class="footer-pages">Políticas de Cookies</a>
                <span class="divider">|</span>
                <a href="#" class="footer-pages">Aviso Legal</a>
            </div>
            <div class="footer-copyright">
                <p>Copyright © 2024 IZETA3 - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
</body>

</html>
