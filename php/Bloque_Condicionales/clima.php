<?php
$lluvia = false; // Cambia a true para simular lluvia
$temperatura = 22; // Cambia el valor para probar diferentes condiciones

if ($temperatura > 20 && !$lluvia) {
    echo "La temperatura es $temperatura y no llueve. A la playa.";
} elseif ($temperatura >= -10 && $temperatura <= 5 && !$lluvia) {
    echo "La temperatura es $temperatura y no llueve. A esquiar.";
} elseif ($temperatura > 5 && $temperatura <= 20 && !$lluvia) {
    echo "La temperatura es $temperatura y no llueve. De paseo.";
} elseif ($lluvia && $temperatura >= -10 && $temperatura <= 40) {
    echo "Hoy llueve y debes quedarte en casa.";
} else {
    echo "La temperatura es $temperatura y es una temperatura extrema.";
}
?>
