<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
    $entrada_actual = conseguirEntrada($db, $_GET['id']);
    if(!isset($entrada_actual['id'])){
        header("Location: index.php");
    }
?>
    
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- Caja Principal -->
<div id="principal">
    
    
    <h1><?=$entrada_actual['titulo']?></h1>
    <h2><?=$entrada_actual['categoria']?></h2>
    <h4><?=$entrada_actual['fecha']?></h4>
    <p>
        <?=$entrada_actual['descripcion']?>
    </p>
    

</div>
<!-- Prie de pagina -->
<?php require_once 'includes/pie.php'; ?>