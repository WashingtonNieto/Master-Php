<?php

function autoloader($class){
    require_once 'clases/'.$class .'.php';
}

spl_autoload_register('autoloader');