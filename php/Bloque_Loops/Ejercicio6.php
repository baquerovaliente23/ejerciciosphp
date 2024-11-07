<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Divisores de un Número</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #E0FFFF; }
        h2 { color: #008B8B; text-align: center; }
        p { text-align: center; font-size: 1.2em; }
    </style>
</head>
<body>
    <h2>Divisores de un Número</h2>
    <?php
    $numero = rand(1, 100);
    echo "<p>Número elegido: $numero</p>";
    echo "<p>Divisores: ";
    
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo "$i ";
        }
    }
    echo "</p>";
    ?>
</body>
</html>
