<?php

require __DIR__ . "./../vendor/autoload.php";

session_start();

$request = new \App\Http\Request();

$request->send();




//echo "<h1>Hola Mundo!</h1>";


//con planos se contruyen casas

//con class se instancian objetos

//use App\Comida;
// instanciamos un objeto
//$objetoUno = new Comida();
//$objetoUno->precio = 5;
//$objetoUno->setNombre = "Sopa";
//echo "<p>" . $objetoUno->getNombre . "</p>";
//var_dump($objetoUno);

//$objetoTres = new Comida();
//$objetoTres->precio = 10;
//$objetoTres->setNombre = "majadito";
//var_dump($objetoTres);
