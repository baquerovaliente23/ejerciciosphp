<?php
$numero = rand(1, 50);
echo "Tabla de multiplicar del $numero:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>
