<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Aleatorios</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #F0FFFF; }
        h2 { color: #2F4F4F; text-align: center; }
        ul { text-align: center; }
    </style>
</head>
<body>
    <h2>Generar 20 Números Aleatorios</h2>
    <ul>
        <?php
        for ($i = 0; $i < 20; $i++) {
            echo "<li>" . rand(1, 6) . "</li>";
        }
        ?>
    </ul>
</body>
</html>
