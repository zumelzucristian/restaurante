<?php

namespace App\Http;

class Request
{
    private $controller;
    private $method;
    private $id;

    public function getController()
    {
        return $this->controller;
    }

    public function setController($controller)
    {
        if (empty($controller)) {
            $this->controller = "\App\Http\Controllers\HomeController";
        } else {
            $controller = strtolower($controller); //volver a minusculas
            $controller = ucfirst($controller);  //la primera volver a mayuscula
            $this->controller = "\App\Http\Controllers\\" . $controller . "Controller";
        }
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        //if
        if ($method == "GET") {

            IF($this->getId()== 0){
                $this->method = "index";
            } else {
                $this->method = "show";
            }

        } else if ($method == "POST") {
            $this->method = "store";
        } else if ($method == "PUT" || $method == "PATCH") {
            $this->method = "update";
        } else if ($method == "DELETE") {
            $this->method = "destroy";
        }
    }
        //switch
        //switch ($method) {
          //  case 'GET':
            //    $this->method = "index";
              //  break;
            //case 'POST':
              //  $this->method = "store";
                //break;
            //case 'PUT':
              //  $this->method = "update";
                //break;
            //case 'PATCH':
              //  $this->method = "update";
                //break;
            //case 'DELETE':
              //  $this->method = "destroy";
                //break;

            //default:
              //  # code...
                //break;
        //}

        //match

        //$this->method = match ($method) {
          //  'GET' => "index",
          //  'POST' => "store",
          //  'PUT', 'PATCH' => "update",
          //  'DELETE' => "destroy",
       // };

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        if (empty($id)) {
            $this->id = 0;
        } else {
            $this->id = $id;
        }
    }

    public function __construct()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $segment = explode("/", $uri);

        $controller = $segment[1];
        $this->setController($controller);

        

        $id = $segment[2];
        $this->setId($id);

        $method = $_SERVER ['REQUEST_METHOD'];
        // TODO: call setMethod()
        $this->setMethod($method);
    }

    public function send()
    {
        echo "<p>Controlador:</p>";
        var_dump($this->getController());

        echo "<p>Id:</p>";
        var_dump($this->getId());

        echo "<p>Method:</p>";
        var_dump($this->getMethod());
    }
}
