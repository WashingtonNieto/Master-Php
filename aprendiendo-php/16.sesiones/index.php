<?php

/* 
 * Sesion: es almacenar y persistir datos del usuario mientras que navega en un
 * sitio web hasta que cierra la sesion o cierra el navegador.
 */

// iniciar la sesion 
session_start();

//variable normal
$variable_normal = 'Soy una cadena de texto';

//Variable de sesion
$_SESSION['variable_persistente'] = 'HOLA SOY UNA SESSION ACTIVA';

echo $variable_normal.'<br/>';
echo $_SESSION['variable_persistente'];
