<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Colores Actualizados</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        h2 { color: #4682b4; }
        div { display: flex; justify-content: center; margin-top: 20px; }
        span { display: inline-block; background-color: #4682b4; color: white; padding: 10px; margin: 5px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Colores (Actualizado)</h2>
    <div>
        <?php
        $colores = ["Rojo", "Verde", "Azul", "Amarillo", "Naranja"];
        unset($colores[1]); // Borrar "Verde"
        $colores = array_values($colores); // Reindexar

        foreach ($colores as $color) {
            echo "<span>$color</span>";
        }
        ?>
    </div>
</body>
</html>

