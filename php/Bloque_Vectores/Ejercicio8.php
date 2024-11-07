<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Capitales</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #eef5f9; }
        h2 { color: #4682b4; text-align: center; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #4682b4; color: white; }
    </style>
</head>
<body>
    <h2>Países y Capitales (Actualizado)</h2>
    <table>
        <tr><th>País</th><th>Capital</th></tr>
        <?php
        $paises = ["España" => "Madrid", "Francia" => "París", "Italia" => "Roma", "Alemania" => "Berlín"];
        $paises["Italia"] = "Milán"; // Cambiamos la capital de Italia

        foreach ($paises as $pais => $capital) {
            echo "<tr><td>$pais</td><td>$capital</td></tr>";
        }
        ?>
    </table>
</body>
</html>
