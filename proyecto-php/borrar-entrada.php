<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
    $entrada_actual = conseguirEntrada1($db, $_GET['id']);
    var_dump($_GET['id']);
    die();
    
?>