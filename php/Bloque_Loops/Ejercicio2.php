<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de Dado</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #FFFAF0; }
        h2 { color: #8B4513; text-align: center; }
        ul { text-align: center; }
    </style>
</head>
<body>
    <h2>Lanzamiento de Dado</h2>
    <ul>
        <?php
        $suma = 0;
        for ($i = 1; $i <= 10; $i++) {
            $lanzamiento = rand(1, 6);
            $suma += $lanzamiento;
            echo "<li>Lanzamiento $i: $lanzamiento, Suma acumulada: $suma</li>";
        }
        ?>
    </ul>
</body>
</html>
