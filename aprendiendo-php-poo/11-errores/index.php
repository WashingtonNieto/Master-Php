<?php

/* 
 * Capturar excepciones, en codigo susceptible a errores
 */
try{
    throw new Exception('Errores de logica');
} catch (Exception $e) {
    echo "Ha ocurrido un error: ".$e->getMessage();
}finally {
    echo "Todo correcto";
}

