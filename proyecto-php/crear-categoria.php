<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- Caja Principal -->
<div id="principal">
    <h1>Crear Categorias</h1>
    
    <p>
        Añade nuevas categorías al blog para que los usuario puedan
        usarlas al crear sus entradas
    </p>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la categoría:</label>
        <input type="text" name="nombre" />
            
           <input type="submit" value="Guardar" />
    </form>
</div>


<!-- Pie de pagina -->
<?php require_once 'includes/pie.php'; ?>
