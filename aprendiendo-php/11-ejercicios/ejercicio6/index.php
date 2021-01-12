<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>TABLAS DE MULTIPLICAR</title>
    </head>
    <body>
        <?php
        
        echo '<h1>TABLAS DE MULTIPLICAR</h1>';
               
        // Ejercicio 6
        // Imprimir por pantalla todas las tablas de multiplicar del 1 al 10
        // mostrar dentro de un html
        $multiplicador=0;
        $multiplicando=0;
        echo '<table border="1">';
        echo '<tr>';
        echo    '<th>Multiplicando </th>';
        echo    '<th> X </th>';
        echo    '<th>Multiplicador </th>';
        echo    '<th> = </th>';
        echo    '<th>Resultado </th>';
        echo '</tr>';
        for($multiplicador=1;$multiplicador<=10;$multiplicador++){
            echo '<td>'.$multiplicador;
            for($multiplicando=1;$multiplicando<=10;$multiplicando++){
                echo '<tr>';
                echo '<td>'.$multiplicador.'<td>'.' X '.'<td>'.$multiplicando.'<td>'.' = '.'<td>'.($multiplicador*$multiplicando);
                echo '</tr>';
            }
        }
        echo '</table>';
        ?>
    </body>
</html>
