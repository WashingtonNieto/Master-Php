<?php
require_once 'models/pedido.php';

class pedidoController{
    public function hacer(){
        require_once 'views/pedido/hacer.php';
    }
    
    public function add(){
        if(isset($_SESSION['identity'])){
            $usuario = $_SESSION['identity']->id;
            //var_dump($usuario);
            //die();
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion ']) ? $_POST['direccion '] : false;
            
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];
            
            
            if($provincia && $localidad && $direccion){
                // Guarda datos en  bd
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCosto($coste);
                
                $save = $pedido->save();
                
              
                
                
                var_dump($pedido);
                die();
            }
            
        }else{
            // Redirigir al index
            header("Location:".base_url);
        }
    }
}
