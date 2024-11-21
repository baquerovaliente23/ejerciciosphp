<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Temperaturas</title>
</head>
<body>
    <h2>Conversión de Temperaturas</h2>
    <?php
    function convertirTemperatura($temperatura, $escala) {
        if ($escala == "C") {
            return ($temperatura * 9/5) + 32; 
        } elseif ($escala == "F") {
            return ($temperatura - 32) * 5/9; 
        } else {
            return "Escala no válida";
        }
    }

    echo "25°C en Fahrenheit es: " . convertirTemperatura(25, "C") . "°F<br>";
    echo "77°F en Celsius es: " . convertirTemperatura(77, "F") . "°C";
    ?>
</body>
</html>
