<?php

/* 
 * Ejercicio3
 * Hacer una interfaz de usuario [formulario] con dos inputs y 4 botones
 * sumar, restar, multiplicar y dividir.
 */

//Se arranca por la logica del program...

if (isset($_POST['numero1']) && isset($_POST['numero2'])){
    $resultado = false;
    
    if(isset($_POST['sumar'])){
        $resultado = "El resultado de suma ".$_POST['numero1']. " y ".$_POST['numero2']." es: ".($_POST['numero1']+$_POST['numero2']);
    }
    if(isset($_POST['resta'])){
        $resultado = "El resultado de restar ".$_POST['numero1']. " y ".$_POST['numero2']." es: ".($_POST['numero1']-$_POST['numero2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado de multiplicar ".$_POST['numero1']. " y ".$_POST['numero2']." es: ".($_POST['numero1']*$_POST['numero2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado de dividir ".$_POST['numero1']. " y ".$_POST['numero2']." es: ".($_POST['numero1']/$_POST['numero2']);
    }
}
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Calculadora</title>
    </head>
    <body>
        <h1>CALCULADORA</h1>
        <form action="" method="POST">
            <p>
                <label for="numero1">Introduzca numero 1</label>
                 <input type="number" name="numero1"><br/>
            </p>

            <p>
                <label for="numero2">Introduzca numero 2</label>
                <input type="number" name="numero2"><br/>
            </p>

            <input type="submit" value="Sumar" name="sumar">
            <input type="submit" value="Restar" name="restar">
            <input type="submit" value="Multiplicar" name="multiplicar">
            <input type="submit" value="Dividir" name="dividir">
            
        </form>

        <?php
            //Resultado
            if($resultado != false):
                echo "<h2>$resultado</h2>";
            endif;    
        ?>

    </body>
</html>


