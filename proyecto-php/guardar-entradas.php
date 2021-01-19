<?php

if(isset($_POST)){

    //incluir la funcion de conexion
    require_once 'includes/conexion.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];

    //var_dump($_POST);
    //die();
    
    
    //validacion
    $errores = array();
    
    if(empty($titulo)){
        $errores['titulo'] = "El titulo no es valido";
    }
    
    if(empty($descripcion)){
        $errores['descripcion'] = "El descripcion no es valido";
    }
    
    if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = "El categoria no es valida";
    }
    //verificar que error hay
    //var_dump($errores);
    //die();
    
    if(count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES(NULL, $usuario,$categoria, '$titulo', '$descripcion',curdate());";
        $guardar = mysqli_query($db, $sql);
    }else{
        $_SESSION["errores_entrada"] = $errores;
        header("Location: crear-entradas.php");
    }
    
}    
header("Location: index.php");
   

