<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio y Mediana</title>
</head>
<body>
    <h2>Promedio y Mediana de un Array</h2>
    <?php
    function calcularPromedioMediana($array) {
        $promedio = array_sum($array) / count($array);

        sort($array);
        $n = count($array);
        $mediana = ($n % 2 == 0) ? ($array[$n / 2 - 1] + $array[$n / 2]) / 2 : $array[floor($n / 2)];

        return ["Promedio" => $promedio, "Mediana" => $mediana];
    }

    $resultados = calcularPromedioMediana([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
    echo "Promedio: " . $resultados["Promedio"] . "<br>";
    echo "Mediana: " . $resultados["Mediana"];
    ?>
</body>
</html>
