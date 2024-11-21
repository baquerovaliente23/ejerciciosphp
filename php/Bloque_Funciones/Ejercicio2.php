<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <?php
    function calcularIMC($peso, $altura) {
        $imc = $peso / ($altura * $altura);
        $categoria = "";

        if ($imc < 18.5) {
            $categoria = "Bajo peso";
        } elseif ($imc < 24.9) {
            $categoria = "Peso normal";
        } elseif ($imc < 29.9) {
            $categoria = "Sobrepeso";
        } else {
            $categoria = "Obesidad";
        }

        return ["IMC" => $imc, "Categoría" => $categoria];
    }

    $resultados = calcularIMC(70, 1.75);
    echo "IMC: " . $resultados["IMC"] . "<br>";
    echo "Categoría: " . $resultados["Categoría"];
    ?>
</body>
</html>
