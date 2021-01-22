<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
<!-- Caja Principal -->
<div id="principal">
    <h1>Ultimas entradas</h1>
    
    <?php 
        $entradas = conseguirEntradas($db, true);
        //echo $entradas;
        //die();
        if(!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    
                    <!-- imprimir var_dump desde html -->
                    <!-- <?php var_dump($entrada); ?> -->
                    
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripcion'],0,180)."..."?>
                        </p>
                    </a>
                </article>
    <?php
            endwhile;
        endif;
    ?>
    
    <div id="ver-toda">
        <a href="entradas.php">Ver todas las entradas </a>
    </div>
</div>
<!-- Prie de pagina -->
<?php require_once 'includes/pie.php'; ?>
