<?php
$dia = rand(1, 7);
$diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
echo "Número: $dia <br>";
echo "Día de la semana: " . $diasSemana[$dia - 1];
?>
