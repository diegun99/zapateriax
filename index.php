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

    <?php
    // conexion a la base de datos
        require_once('archivos/procesos/conexion.php');
        //crear consultas
        $sql = "select* from productos";
        //EJECUTAA CONSULTAS //almacenar consulta en resultado
        $resultado = $conexion-> query($sql);
        // crear arreglo asociativo y guardar en productos

        /*recorrer arreglo ,quiza falt el endwhile
        while ($productos = $resultado->fetch_assoc()):
            

            echo $productos['nombre_producto'];
            echo "<br>";

        endwhile;
        */
 
        
            
        




        /*mostrar arreglo
        echo"<pre>";
        echo var_dump($productos);
        echo "</pre>";*/


        
        

    ?>

    <main class="contenedor margenes">
        <h1 class="centrar-texto">Productos</h1>
        <div class="contenedor-prod">

            <?php while($productos = $resultado->fetch_assoc()):?>
            <div class="producto">
                <img src="zapatos/<?php echo $productos['imagen_producto']; ?>" alt="<?php echo $productos['nombre_producto']; ?>">
                <h3><?php echo $productos['nombre_producto']; ?><h3>
                    <div class="ref-marca">
                        <p>Referencia: <?php echo $productos['ref_producto']; ?> </p>
                        <p>Marca: <?php echo $productos['marca_producto']; ?></p>
                    </div>
                <p class="precio"><?php echo "$ ".number_format($productos['precio_producto'], 0, '.', '.'); ?></p>
                <p class="texto-prod"><?php echo ($productos['descripcion_producto']); ?></p>
                <a href="producto.php?id=<?php echo $productos['idproducto']; ?>" class="boton">COMPRAR</a>
            </div>

            <?php endwhile; ?>
        </div>

        <?php $conexion->close(); ?>
    </main>

    <?php include_once 'archivos/secciones/footer.php'; ?>
    