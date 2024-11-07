<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad según Clima</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #FFF5EE; }
        h2 { color: #DC143C; text-align: center; }
    </style>
</head>
<body>
    <h2>Recomendación de Actividad según el Clima</h2>
    <?php
    $lluvia = rand(0, 1) == 1;
    $temperatura = rand(-20, 50);
    echo "<p>Temperatura: $temperatura °C</p>";
    echo "<p>Está lloviendo: " . ($lluvia ? "Sí" : "No") . "</p>";

    if ($lluvia && $temperatura >= -10 && $temperatura <= 40) {
        echo "<p>Hoy llueve, debes quedarte en casa.</p>";
    } elseif (!$lluvia && $temperatura > 20) {
        echo "<p>La temperatura es $temperatura °C. A la playa!</p>";
    } elseif (!$lluvia && $temperatura >= -10 && $temperatura <= 5) {
        echo "<p>La temperatura es $temperatura °C. A esquiar!</p>";
    } elseif (!$lluvia && $temperatura > 5 && $temperatura <= 20) {
        echo "<p>La temperatura es $temperatura °C. De paseo!</p>";
    } else {
        echo "<p>La temperatura es $temperatura °C. Temperatura extrema!</p>";
    }
    ?>
</body>
</html>
