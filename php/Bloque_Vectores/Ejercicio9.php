<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Marca de Autos</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fff0f5; }
        h2 { color: #8b0000; text-align: center; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #8b0000; color: white; }
    </style>
</head>
<body>
    <h2>Marcas de Autos</h2>
    <table>
        <tr><th>Marca</th><th>País de Origen</th></tr>
        <?php
        $autos = ["Toyota" => "Japón", "Ford" => "EE.UU.", "BMW" => "Alemania", "Renault" => "Francia"];
        unset($autos["BMW"]); // Borramos BMW

        foreach ($autos as $marca => $pais) {
            echo "<tr><td>$marca</td><td>$pais</td></tr>";
        }
        ?>
    </table>
</body>
</html>
