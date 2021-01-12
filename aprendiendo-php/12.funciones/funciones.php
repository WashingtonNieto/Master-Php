<?php
    echo "<h1>".$_GET["numero1"]."</h1>";
    echo "<h1>".$_GET["numero2"]."</h1>";
    
    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];
    
    function tabla($numero1){
        echo "<h3> Tabla de multiplicar del numero: $numero1 </h3>";
        
        for($i = 1;$i <= 10;$i++){
            $operacion=$numero1*$i;
            echo "$numero1 x $i = $operacion <br/>";
        }
    }
    
    if(isset($_GET["numero1"])){
        tabla($_GET["numero1"]);
    }else{
        echo "No hay datos para procesar";
    }
    
    //con for para imprimir todas las tablas del 0 al 10
    for($i = 0; $i <= 10; $i++){
        tabla($i);
    }
    
    // ejemplo 3 parametros
    // calculadora
    function calculadora($numero1,$numero2){
        //conjunto de instrucciones a ejecutar
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        
        $cadena_texto = "";
        
        $cadena_texto .= "Suma: $suma <br/>";
        $cadena_texto .= "Resta: $resta <br/>";
        $cadena_texto .= "Multiplicacion: $multiplicacion <br/>";
        $cadena_texto .= "Division: $division <br/>";
        $cadena_texto .= "<hr/>";
        
        return $cadena_texto;
    }
    
    //invocar la funcion
    echo calculadora($numero1,$numero2);
    
    //ejemplo 4 - Funciones dentro de otras (primera forma)
    
    function devuelveElNombre($nombre, $apellidos){
        $texto = "El nombre es: $nombre <br/>"."Los apellidos son: $apellidos";
        return $texto;
    }
    
    echo devuelveElNombre("Washington", "Nieto");

    //ejemplo 4 - Funciones dentro de otras (segunda forma)

    function getNombre($nombre){
        $texto="El nombre es: $nombre ";
        return $texto;
    }
    function getApellidos($apellidos){
        $texto="Los apellidos son: $apellidos";
        return $texto;
    }
    
    function devuelveElNombreOtro($nombre, $apellidos){
        $texto = getNombre($nombre)."<br/>".getApellidos($apellidos);
        return $texto;
    }
    
    
    echo devuelveElNombreOtro("Washington", "Nieto");
    
    
?>

