<?php

namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Mario Nieto Arce";
        $this->email = "mario@hotmail.com";
    }
}

