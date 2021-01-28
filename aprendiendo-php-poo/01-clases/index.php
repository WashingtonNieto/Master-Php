<?php

//Programacion Orientada a Objetos

//Clase : es un molde para crear mas objetos con las mismas caracteristicas


Class coche{
    
    //Atributos o propiedades ( variables)
    
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
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
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
}//fin definicion de clase

//crear un objeto
$coche = new Coche();

//usar los metodos

$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getColor().'</br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coche es: ".$coche->getVelocidad().'</br>';

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump ($coche);
var_dump ($coche2);

