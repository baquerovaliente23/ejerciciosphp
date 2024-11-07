<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de Dado hasta Suma 100</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #FFE4E1; }
        h2 { color: #8B0000; text-align: center; }
        ul { text-align: center; }
    </style>
</head>
<body>
    <h2>Lanzamiento de Dado hasta alcanzar una Suma de 100</h2>
    <ul>
        <?php
        $suma = 0;
        $i = 1;
        while ($suma < 100) {
            $lanzamiento = rand(1, 6);
            $suma += $lanzamiento;
            echo "<li>Lanzamiento $i: $lanzamiento, Suma acumulada: $suma</li>";
            $i++;
        }
        ?>
    </ul>
</body>
</html>

