<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenar Productos por Precio</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0fff0; }
        h2 { color: #228b22; text-align: center; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #228b22; color: white; }
    </style>
</head>
<body>
    <h2>Productos y Precios (Ordenados por Precio)</h2>
    <table>
        <tr><th>Producto</th><th>Precio</th></tr>
        <?php
        $productos = ["Manzana" => 1.2, "Pan" => 0.8, "Leche" => 1.5, "Huevos" => 2.0, "Queso" => 3.5];
        asort($productos); // Ordenar por valor

        foreach ($productos as $producto => $precio) {
            echo "<tr><td>$producto</td><td>\$$precio</td></tr>";
        }
        ?>
    </table>
</body>
</html>
