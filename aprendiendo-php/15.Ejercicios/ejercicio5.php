<?php

/* 
 * Ejercicio 5
 * Crear un  programa en php que cree un array con el contenido de la siguiente 
 * tabla:
 * ACCION   AVENTURA    DEPORTES
 * gta      assasins    fifa 
 * cod      crash       pes
 * pugb     prince      moto gp
 * 
 * cada fila debe ir en un fichero separado
 */

//FUNCIONES
function mostrarArray($ejercicio){
    $resultado = "";
    foreach ($ejercicio as $numero) {
        $resultado .= $numero."<br/>"; //s igual a hacer ($resultado = $resultado.$numero."<br/>";
    }
    return $resultado;
}


$tabla = array(
    "ACCION"    => array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA"  => array("Assasins Creed","Crash Bandicoot","Prince of Percia"),
    "DEPORTES"  => array("Fifa 19","Pes 19", "Moto G 19")
);

// para saber como se llaman los indices
$categorias = array_keys($tabla);
?>

<!--realizamos la tabla en html-->
<table border = "1">
    <?php    require_once 'ejercicio5/encabezado.php';?>
    <?php    require_once 'ejercicio5/primeraFila.php';?>
    <?php    require_once 'ejercicio5/segundaFila.php';?>
    <?php    require_once 'ejercicio5/terceraFila.php';?>
</table>
        