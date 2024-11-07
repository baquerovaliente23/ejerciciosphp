<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciudades Añadidas</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; }
        h2 { color: #007bff; }
        ul { width: 50%; margin: 20px auto; padding: 0; list-style-type: none; }
        li { background: #007bff; color: white; padding: 10px; margin: 5px 0; text-align: center; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Ciudades Añadidas</h2>
    <ul>
        <?php
        $ciudades = [];
        $ciudades[] = "Madrid";
        $ciudades[] = "Barcelona";
        $ciudades[] = "Valencia";
        $ciudades[] = "Sevilla";
        $ciudades[] = "Bilbao";

        foreach ($ciudades as $ciudad) {
            echo "<li>$ciudad</li>";
        }
        ?>
    </ul>
</body>
</html>
