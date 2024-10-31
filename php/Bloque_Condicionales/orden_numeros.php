<?php
$n1 = rand(0, 100);
$n2 = rand(0, 100);
$n3 = rand(0, 100);
echo "Números: $n1, $n2, $n3 <br>";

$numeros = [$n1, $n2, $n3];
sort($numeros);
echo "Números ordenados de mayor a menor: " . implode(", ", array_reverse($numeros));
?>
