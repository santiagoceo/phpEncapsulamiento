<?php

include './Empleado.php';

class EmpleadoComision extends Empleado {

    private $comision;
    private $unidadesVendidas;

    function __construct($nombre, $apellido, $salario, $comision){
        parent::__construct($nombre, $apellido, $salario);
        $this->comisiones = $comision;
    }

    public function calcularPago(){
        $salario = $this->getSalario();
        return $salario + ($this->comision * $this->unidadesVendidas);
    }

    public function sumarVentas($unidades){
        $this->unidadesVendidas = $this->unidadesVendidas + $unidades;
    }

    public function reiniciarVentas(){
        $this->unidadesVendidas=0;
    }
}