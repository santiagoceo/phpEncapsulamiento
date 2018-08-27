<?php

class Empleado{

    private $nombre;
    private $apellido;
    private $salario;

    function __construct($nombre, $apellido, $salario){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->salario = $salario;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getSalario(){
        return $this->salario;
    }
}
