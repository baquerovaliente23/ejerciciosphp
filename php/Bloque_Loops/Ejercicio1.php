<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Aleatorios</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #F0FFFF; 
            margin: 0;
            padding: 0;
        }
        h2 { 
            color: #2F4F4F; 
            text-align: center; 
            margin-top: 20px;
        }
        ul { 
            text-align: center; 
            padding: 0;
            list-style-type: none; 
        }
        li { 
            display: inline-block; 
            margin: 5px; 
            padding: 5px 10px;
            background-color: #B0E0E6;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h2>Generar 20 Números Aleatorios</h2>
    <ul>
        <?php
        for ($i = 0; $i < 20; $i++) {
            echo "<li>" . rand(1, 6) . "</li>";
        }
        ?>
    </ul>
</body>
</html>
