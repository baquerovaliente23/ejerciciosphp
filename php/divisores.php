<?php
$n1 = 30; // Cambia este valor según lo necesites
echo "Divisores de $n1:<br>";
for ($i = 1; $i <= $n1; $i++) {
    if ($n1 % $i == 0) {
        echo $i . " ";
    }
}
?>
