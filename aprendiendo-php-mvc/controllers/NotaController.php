<?php

class NotaController{
    
    public function listar(){
        //Modelo
        require_once 'models/nota.php';
        
        //Logica accion del controlador
        $nota = new Nota();
        $nota->setNombre("Was");
        $nota->setContenido("Hola mundo MVC");
        
        //Vista
        require_once 'views/nota/listar.php';
    }
    
    public function crear(){
        
    }
    
    public function borrar(){
        
    }
    
}

