<?php

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Washington Nieto";
        $this->email = "washington@hotmail.com";
        echo "Creando el objeto creado<br/>";
    }
    
    public function __toString() {
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }
    
    public function __destruct() {
        echo "destruyendo el objeto creado<br/>";
    }
}

$usuario = new Usuario();

//for($i = 0; $i <= 200; $i++){
//    echo $i."<br/>";
//}

echo $usuario;
echo $usuario->email;