<?php

namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Washington Nieto";
        $this->email = "washington@hotmail.com";
    }
}
