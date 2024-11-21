<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área y Perímetro del Rectángulo</title>
</head>
<body>
    <h2>Área y Perímetro del Rectángulo</h2>
    <?php
    function calcularAreaPerimetro($largo, $ancho) {
        $area = $largo * $ancho;
        $perimetro = 2 * ($largo + $ancho);
        return ["Área" => $area, "Perímetro" => $perimetro];
    }

    $resultados = calcularAreaPerimetro(5, 3);
    echo "Área: " . $resultados["Área"] . " unidades cuadradas<br>";
    echo "Perímetro: " . $resultados["Perímetro"] . " unidades";
    ?>
</body>
</html>
