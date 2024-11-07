<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comparación de Números</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; }
        h2 { color: #FF4500; text-align: center; }
    </style>
</head>
<body>
    <h2>Comparar Dos Números</h2>
    <?php
    $n1 = rand(0, 20);
    $n2 = rand(0, 20);
    echo "<p>Número 1: $n1</p>";
    echo "<p>Número 2: $n2</p>";

    if ($n1 > $n2) {
        echo "<p>$n1 es mayor que $n2</p>";
    } elseif ($n2 > $n1) {
        echo "<p>$n2 es mayor que $n1</p>";
    } else {
        echo "<p>Los números son iguales</p>";
    }
    ?>
</body>
</html>
