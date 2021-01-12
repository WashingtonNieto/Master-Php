<?php

/* 
 * Borrar una cookie
 */

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-1000);
}

//reubicar una cookie

header('location:ver_cookies.php');
