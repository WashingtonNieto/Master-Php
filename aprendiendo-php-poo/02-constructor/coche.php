<?php
//contructor: Es un metodo especial dentro de una clase, y se suele utilizar
//para darle un valor a los atributos o propiedades que tiene un objeto 
//el constructor es el primer metodo que se ejecuta al crea el objeto y se
//llama automaticamente al crearlo.
//este metodo puede recibir parametros como cualquier otro metodo y para pasarselo
//simpliemente tenemos pasarle parametros a la instancia del objeto.
//El contructor nunca devuelve ningun dato, simplemente es un metodo magico que
//se encarga de setear informacion en las propiedades. se ejecuta de primero
//
Class coche{
    
    //Atributos o propiedades ( variables)
    
    //public: podemos acceder a el desde cualquier lugar dentro de la clase actual
    //        dentro de clases que hereden esta clase o fuera de la clase
    public $color;
    
    //protected:Podemos acceder a ellos desde la clase que los define y desde clase
    //que hereden esta clase
    protected $marca;
    
    //Private: unicamente se puede acceder desde esta clase
    private $modelo;
    
    //public $color;
    //public $marca;
    //public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
    //Metodos: Son acciones que hace el objeto (funciones)
    public function getColor(){
        //busca en esta clase la propiedad x
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }     
    
    public function getModelo($modelo){
       return $this->modelo;
    }    
    
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
    public function mostrarInformacion(Coche $miObjeto){
        $informacion = "<h1>Informacion del coche</h1>";
        $informacion .= "Color: ".$miObjeto->color;
        $informacion .= "<br/>Modelo: ".$miObjeto->modelo;
        $informacion .= "<br/>Velocidad: ".$miObjeto->velocidad;
        
        return $informacion;
    }

}//fin definicion de clase

