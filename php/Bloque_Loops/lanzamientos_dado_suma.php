<?php
$suma = 0;
$i = 0;
while ($suma < 100) {
    $dado = rand(1, 6);
    $suma += $dado;
    $i++;
    echo "Lanzamiento $i: $dado, Suma acumulada: $suma <br>";
}
?>
