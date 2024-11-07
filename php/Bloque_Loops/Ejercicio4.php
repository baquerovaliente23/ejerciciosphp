<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #F0E68C; }
        h2 { color: #556B2F; text-align: center; }
        table { width: 30%; margin: 0 auto; border-collapse: collapse; }
        th, td { border: 1px solid #556B2F; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    <h2>Tabla de Multiplicar</h2>
    <?php
    $numero = rand(1, 50);
    echo "<p>Tabla del número $numero:</p>";
    echo "<table><tr><th>Multiplicador</th><th>Resultado</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$numero x $i</td><td>" . ($numero * $i) . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>

