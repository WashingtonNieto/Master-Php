<?php

/* 
 * Ejercicios 2
 * 1. Crear una funcion
 * 2. Validar un email con filter_var
 * 3. Recoger variable por get y validarla
 * 4. mostrar el resultado
 * 
 * ojo : la instruccion para probar es:
 * http://localhost/master-php/aprendiendo-php/23.ejercicios/ejercicios2.php?email=hola@hotmail.com
 */

function ValidarEmail($email){
    $status = "Email no valido!";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo ValidarEmail($_GET["email"]);
}else{
    echo "Pasa por get un email....";
}
