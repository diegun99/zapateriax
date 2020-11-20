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
            <a href="clientes.php">Registrar Clientes</a>
            <a href="#">Mujeres</a>
            <a href="#">Hombres</a>
            <a href="#">Niños</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>
    <div class="especial">
        <h3>NUEVA COLECCIÓN PARA MAMÁ</h3>
    </div>
    <section class="contenedor promo-madre">
        <div class="aviso">
            <img src="img/comodidad.jpg" alt="Comodidad">
            <a href="#" class="boton">COMPRAR</a>
        </div>
        <div class="aviso">
            <img src="img/deportista.jpg" alt="Deportista">
            <a href="#" class="boton">COMPRAR</a>
        </div>
        <div class="aviso">
            <img src="img/descomplicada.jpg" alt="Descomplicada">
            <a href="#" class="boton">COMPRAR</a>
        </div>
    </section>
    <main class="contenedor margenes">
        <h1 class="centrar-texto">Productos</h1>
        <div class="contenedor-prod">
            <div class="producto">
                <img src="zapatos/black-shoes1.jpg" alt="Negros 1">
                <h3>Tenis Negro Hombre</h3>
                    <div class="ref-marca">
                        <p>Referencia: N88B</p>
                        <p>Marca: SIKA</p>
                    </div>
                <p class="precio"><?php echo "$ ".number_format("99000", 0, '.', '.'); ?></p>
                <p class="texto-prod">Acabados en cuero con comodidad para el día a día. Pregunte por nuestras promociones 2x1 en esta referencia.</p>
                <a href="#" class="boton">COMPRAR</a>
            </div>
        </div>
    </main>
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