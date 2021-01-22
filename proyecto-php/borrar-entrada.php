<?php
require_once 'includes/conexion.php';


//if(isset($_SESSION['usuario']) && isset($_GET['id'])){
if(isset($_SESSION['usuario'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    var_dump($entrada_id);
    //echo mysqli_error($db);
    die();
    
    //$sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id";
    //$borrar = mysqli_query($db, $sql);
}else{
    header("Location: mis-datos.php");
}
header("Location: index.php");