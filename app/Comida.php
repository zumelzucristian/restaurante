<?php

namespace App;

class Comida
{
  //atributos
  private $nombre;
  public $precio;

}
//propiedades
// getters setters

public function getNombre()
{
   return $this->nombre; 
}


public function setNombre($Nombre)
{
    this->nombre = $Nombre;
}


//constructor

public function __construct() {
    $this->nombre = "S/N";
    $this->precio = 0;
}