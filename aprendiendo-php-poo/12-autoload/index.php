<?php

/*
 * hacer de esta forma el llamado recarga mucho el sistema 
 * require_once 'clases/usuario.php';
 * require_once 'clases/categoria.php';
 * require_once 'clases/entrada.php';
 * La manera profesional de hacerlo es...
*/
require_once 'autoload.php';

//$usuario = new Usuario();
//echo $usuario->nombre;

//Espacios de nombre -namespace-

use MisClases\Usuario,MisClases\Categoria,MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
            
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    function informacion(){
        echo __CLASS__."<br/>";
        echo __METHOD__."<br/>";
    }
}



$principal = new Principal();
$principal->informacion();
//var_dump($principal->usuario);
//si quiero saber que metodos hay, se usa
var_dump(get_class_methods($principal));

$usuario = new UsuarioAdmin();
var_dump($usuario);

//Comprobar si existe una clase
$clase = class_exists('Misclases\Usuario');

if($clase){
    echo "<h1>La clase si existe</h1>";
}