<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapateria X</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="encabezado">
        <a href="index.php">    
            <img src="img/logo.png" alt="Logo Zapatería">
        </a>
        <h2 class="fw-300">"El mejor calzado al alcance de sus manos"</h2>
        <nav>
            <a href="#">Ofertas</a>
            <a href="#">Mujeres</a>
            <a href="#">Hombres</a>
            <a href="#">Niños</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

<h1 class="centrar-texto">Registrar Cliente</h1>
    <div class="contenedor-form">
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required>

            <label>Genero:</label>
            <div class="cont-genero">
                <label for="genm">Masculino:</label>
                <input type="radio" name="genero" value="M" id="genm" required>
                <label for="genf">Femenino:</label>
                <input type="radio" name="genero" value="F" id="genf" required>
            </div>

            <label for="nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="nacimiento" id="nacimiento" required>

            <label for="tele">Teléfono:</label>
            <input type="number" name="tele" id="tele" required>

            <label for="dir">Dirección:</label>
            <input type="text" name="dir" id="dir" required>
            <input class="boton" name="enviado" type="submit" value="GUARDAR">
        </form>
    </div>

    <footer class="pie">
        <div>
            <h4>SERVICIO AL CLIENTE</h4>
            <p>Seguimiento a Pedidos</p>
            <p>Contáctanos</p>
            <p>Nuestro compromiso</p>
        </div>
        <div>
            <h4>INFORMACIÓN</h4>
            <p>Preguntas frecuentes</p>
            <p>Términos y condiciones</p>
            <p>Guía de tallas</p>
        </div>
        <div>
            <h4>CORPORATIVO</h4>
            <p>Quiénes somos</p>
            <p>Nuestro Calzado</p>
            <p>Todo sobre los pies</p>
            <p>Como ser empleado</p>
            <p>Aviso legal</p>
        </div>
    </footer>
    <div class="copyright">
        <p>&copy; ING. LEONARDO ALVAREZ</p>
        <div class="redes">
            <a href="#">
                <img src="img/fb.webp" alt="Facebook">
            </a>
            <a href="#">
                <img src="img/twitter.png" alt="Twitter">
            </a>
            <a href="#">
                <img src="img/instagram.png" alt="Instagram">
            </a>
            <a href="#">
                <img src="img/youtube.png" alt="YouTube">
            </a>
        </div>
    </div>

</body>
</html>