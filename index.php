<?php include_once 'archivos/secciones/header.php'; ?>

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

    <?php include_once 'archivos/secciones/footer.php'; ?>
    