<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- Caja Principal -->
<div id="principal">
    <h1>Crear Entradas</h1>
    
    <p>
        Añade nuevas entradas al blog para que los usuario puedan
        leerlas y disfrutar de nuestro contenido
    </p>
    <form action="guardar-entradas.php" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" />
        
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion"> </textarea>
        
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria['id']?>">
                <?=$categoria['nombre']?>
            </option>
            <?php
                    endwhile;
                endif;
                
            ?>
        </select>
        <input type="submit" value="Guardar" />
    </form>
</div>


<!-- Pie de pagina -->
<?php require_once 'includes/pie.php'; ?>
