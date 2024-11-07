<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Países y Capitales</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; }
        h2 { color: #4169e1; text-align: center; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #4169e1; color: white; }
    </style>
</head>
<body>
    <h2>Países y Capitales</h2>
    <table>
        <tr><th>País</th><th>Capital</th></tr>
        <?php
        $paises = [];
        $paises["España"] = "Madrid";
        $paises["Francia"] = "París";
        $paises["Italia"] = "Roma";

        foreach ($paises as $pais => $capital) {
            echo "<tr><td>$pais</td><td>$capital</td></tr>";
        }
        ?>
    </table>
</body>
</html>

