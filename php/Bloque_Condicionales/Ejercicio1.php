<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Número Positivo, Negativo o Cero</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
        h2 { color: #4CAF50; text-align: center; }
    </style>
</head>
<body>
    <h2>Determinar si el Número es Positivo, Negativo o Cero</h2>
    <?php
    $numero = rand(-100, 100);
    echo "<p>Número generado: $numero</p>";
    if ($numero > 0) {
        echo "<p>El número es positivo.</p>";
    } elseif ($numero < 0) {
        echo "<p>El número es negativo.</p>";
    } else {
        echo "<p>El número es cero.</p>";
    }
    ?>
</body>
</html>

