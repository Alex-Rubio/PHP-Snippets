<?php
// Calcula el número de días entre dos fechas usando la función date_diff()
  
// Crear objetos Fecha
$fecha1 = date_create('2022-01-01');
$fecha2 = date_create('2022-08-31');
  
// Calcula la diferencia entre los objetos Fecha
$interval = date_diff($fecha1, $fecha2);
  
// Muestra el resultado en días
echo $interval->format('%R%a días');
?>