<?php
/*Condicional IF
 * 
 * if(condicion){
 *  instrucciones
 * }else{
 *  otras(instrucciones)
 * }
 * OPERADORES DE COMPARACION
 * == (exactamente igual)
 * === (identico)
 * != (distinto/diferente)
 * <> (distinto/diferente)
 * 
 * && and
 * || or
 */
$color='verde';

if ($color == 'rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}
//
echo "<br/>";
$year = 2019;
if($year<2019){
    echo "Es un ano anterior a 2019";
}else{
    echo " es un ano posterior a 2019";
}
echo "<br/>";
//ejemplo
$edad1 = 18;
$edad2 = 64;
$edadOficial = 25;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "no puede trabajar";
}
echo "<br/>";

// switch
$dia=7;
switch ($dia){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "FIN DE SEMANA";
        break;
}

?>

