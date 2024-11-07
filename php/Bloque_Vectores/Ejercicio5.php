<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Deportes Ordenados</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f0f5; }
        h2 { color: #006400; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #006400; color: white; }
        td { text-align: center; }
    </style>
</head>
<body>
    <h2>Deportes Ordenados</h2>
    <table>
        <tr><th>Deporte</th></tr>
        <?php
        $deportes = ["Fútbol", "Tenis", "Baloncesto", "Natación", "Golf", "Ciclismo", "Atletismo"];
        sort($deportes);

        foreach ($deportes as $deporte) {
            echo "<tr><td>$deporte</td></tr>";
        }
        ?>
    </table>
</body>
</html>

