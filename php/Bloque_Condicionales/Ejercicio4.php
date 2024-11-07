<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Día de la Semana</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #FAFAD2; }
        h2 { color: #008080; text-align: center; }
    </style>
</head>
<body>
    <h2>Día de la Semana</h2>
    <?php
    $dia = rand(1, 7);
    $diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    echo "<p>Número generado: $dia</p>";
    echo "<p>Día de la semana: " . $diasSemana[$dia - 1] . "</p>";
    ?>
</body>
</html>

