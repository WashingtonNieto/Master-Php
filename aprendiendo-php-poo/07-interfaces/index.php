<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    public $modelo;
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function encender(){
        
    }
    public function apagar(){
        
    }
    public function reiniciar(){
        
    }
    public function desfragmentar(){
        
    }
    public function detectarUSB(){
        
    }


}

$macintosh = new iMac();
$macintosh->setModelo('Macbook Pro 2019');
echo $macintosh->getModelo();

//var_dump($macintosh);