<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contar Hacia Atrás</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #E6E6FA; }
        h2 { color: #6A5ACD; text-align: center; }
        p { text-align: center; }
    </style>
</head>
<body>
    <h2>Contar Hacia Atrás desde un Número</h2>
    <?php
    $n1 = rand(-50, 50);
    $n1 = abs($n1); // Convertimos a positivo si es negativo
    echo "<p>Contando desde $n1 hacia 0:</p><p>";
    for ($i = $n1; $i >= 0; $i--) {
        echo "$i ";
    }
    echo "</p>";
    ?>
</body>
</html>

