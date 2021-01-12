<?php
    
// Ejercicio 4
    $numero1 = $_GET['numerouno'];
    $numero2 = $_GET['numerodos'];
    
    //Opraciones
    
    if(isset($numero1) && isset($numero2)){
        echo "suma: ".($numero1+$numero2)."<br/>";
        echo "resta: ".($numero1/$numero2)."<br/>";
        echo "multiplicacion: ".($numero1*$numero2)."<br/>";
        echo "division: ".($numero1/$numero2)."<br/>";
    }else{
        echo 'No hay numeros para procesar';
    }
  
// Ejercicio 5
    if(isset($numero1)&& isset($numero2)){
        for ($i=$numero1; $i<=$numero2; $i++){
            echo $i."<br/>";
        }
    }else{
        echo 'No hay numeros para procesar';
    }
?>