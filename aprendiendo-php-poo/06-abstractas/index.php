<?php
//una clase abstracta que no se puede instanciar y no podemos crear objetos con ella
//pero la podemos usar para heredar de ella, y esa clase define la estructura que
//puede tener una clase que la herede incluso tambien puede definir funcionalidad
//aparte cada metodo que yo defina como abstracto dentro de la clase abstracta
//va tener que ser definido tambien dentro de la clase hija para poder utilizarse
abstract class Ordenador{
    
    public $encendido;
    
    abstract public function encender();
    
    public function apagar(){
        $this->encendido = false;
    }
}
class PcAsus extends Ordenador{
    
    public $software;
    
    public function arrancarSoftware(){
        $this->software = true;
    }
    
    public function encender(){
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);