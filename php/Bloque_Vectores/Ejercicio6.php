<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personas y Edades</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fffaf0; }
        h2 { color: #b22222; text-align: center; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #b22222; color: white; }
    </style>
</head>
<body>
    <h2>Personas y Edades</h2>
    <table>
        <tr><th>Nombre</th><th>Edad</th></tr>
        <?php
        $personas = ["Juan" => 25, "Ana" => 32, "Luis" => 45, "María" => 28, "Carlos" => 35];
        foreach ($personas as $nombre => $edad) {
            echo "<tr><td>$nombre</td><td>$edad</td></tr>";
        }
        ?>
    </table>
</body>
</html>
