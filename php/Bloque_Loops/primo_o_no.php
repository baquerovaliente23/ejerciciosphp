<?php
$n1 = 29; // Cambia este valor según lo necesites
$isPrimo = true;

if ($n1 <= 1) {
    $isPrimo = false;
}

for ($i = 2; $i <= sqrt($n1); $i++) {
    if ($n1 % $i == 0) {
        $isPrimo = false;
        break;
    }
}

if ($isPrimo) {
    echo "$n1 es un número primo.";
} else {
    echo "$n1 no es un número primo.";
}
?>
