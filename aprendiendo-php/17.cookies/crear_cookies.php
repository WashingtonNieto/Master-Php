<?php

/* 
 * Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del mismo 
 * en la web
 */

//Crear cookie
//setcookie("nombre","valor que solo puede ser texto",caducidad,dominio);

//cookie basica
setcookie('micookie','valor de mi galleta');

//cookie con caducidad a un year
setcookie('unyear','valor de mi galleta de 365 dias',time()+(60*60*24*365));
?>
<a href="ver_cookies.php">Ver las cookies</>


