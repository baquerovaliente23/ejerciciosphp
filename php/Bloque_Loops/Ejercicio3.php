<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de Dado hasta Suma Menor que 100</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #FFFAF0; 
            margin: 0;
            padding: 0;
        }
        h2 { 
            color: #4682B4; 
            text-align: center; 
            margin-top: 20px;
        }
        table { 
            width: 60%; 
            margin: 20px auto; 
            border-collapse: collapse; 
        }
        th, td { 
            border: 1px solid #4682B4; 
            padding: 10px; 
            text-align: center; 
        }
        tr:nth-child(even) { 
            background-color: #F5FFFA; 
        }
    </style>
</head>
<body>
    <h2>Lanzamiento de Dado mientras que la Suma sea Menor que 100</h2>
    <table>
        <tr>
            <th>Lanzamiento</th>
            <th>Valor del Dado</th>
            <th>Suma Acumulada</th>
        </tr>
        <?php
        $suma = 0;
        $i = 1;
        while ($suma < 100) {
            $lanzamiento = rand(1, 6);
            $suma += $lanzamiento;
            echo "<tr><td>$i</td><td>$lanzamiento</td><td>$suma</td></tr>";
            $i++;
        }
        ?>
    </table>
</body>
</html>
