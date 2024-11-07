<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenar Tres Números</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; }
        h2 { color: #4682B4; text-align: center; }
    </style>
</head>
<body>
    <h2>Ordenar Tres Números Aleatorios de Mayor a Menor</h2>
    <?php
    $n1 = rand(0, 100);
    $n2 = rand(0, 100);
    $n3 = rand(0, 100);
    $numeros = [$n1, $n2, $n3];
    rsort($numeros);

    echo "<p>Números generados: $n1, $n2, $n3</p>";
    echo "<p>Ordenados de mayor a menor: " . implode(", ", $numeros) . "</p>";
    ?>
</body>
</html>
