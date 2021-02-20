<?php
require_once 'models/pedido.php';

class pedidoController{
    public function hacer(){
        require_once 'views/pedido/hacer.php';
    }
    
    public function add(){
        if(isset($_SESSION['identity'])){
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion ']) ? $_POST['direccion '] : false;
            
            if($provincia && $ciudad && $direccion){
                // Guarda datos en  bd
                $pedido = new Pedido();
                $pedido->setProvincia($provincia);
            }
            
        }else{
            // Redirigir al index
            header("Location:".base_url);
        }
    }
}
