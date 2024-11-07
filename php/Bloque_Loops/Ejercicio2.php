<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de Dado - 10 Veces</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #E6E6FA; 
            margin: 0;
            padding: 0;
        }
        h2 { 
            color: #8A2BE2; 
            text-align: center; 
            margin-top: 20px;
        }
        table { 
            width: 60%; 
            margin: 20px auto; 
            border-collapse: collapse; 
        }
        th, td { 
            border: 1px solid #8A2BE2; 
            padding: 10px; 
            text-align: center; 
        }
        tr:nth-child(even) { 
            background-color: #F0F8FF; 
        }
    </style>
</head>
<body>
    <h2>Lanzamiento de Dado - 10 Veces</h2>
    <table>
        <tr>
            <th>Lanzamiento</th>
            <th>Valor del Dado</th>
            <th>Suma Acumulada</th>
        </tr>
        <?php
        $suma = 0;
        for ($i = 1; $i <= 10; $i++) {
            $lanzamiento = rand(1, 6);
            $suma += $lanzamiento;
            echo "<tr><td>$i</td><td>$lanzamiento</td><td>$suma</td></tr>";
        }
        ?>
    </table>
</body>
</html>

