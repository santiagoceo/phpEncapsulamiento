<?php
include './empleado.php';

$objEmpleado = new Empleado("Ab","Cd",2000000);

echo $objEmpleado->getNombre();
echo $objEmpleado->getApellido();
echo $objEmpleado->getSalario();
