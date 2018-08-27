<?php
include './EmpleadoComision.php';

$objEmpleadoComision = new EmpleadoComision("Ab","Cd",2000000,1.0);

$objEmpleadoComision->sumarVentas(5);

echo "Nombre ".$objEmpleadoComision->getNombre()."<br>";
echo "Apellido ".$objEmpleadoComision->getApellido()."<br>";
echo "Pago base ".$objEmpleadoComision->getSalario()."<br>";
echo "Pago total ".$objEmpleadoComision->calcularPago();
