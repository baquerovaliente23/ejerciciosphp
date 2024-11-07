<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #5a67d8;
        }
        .asignatura {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
        .estudiante {
            margin-left: 20px;
            margin-top: 10px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Notas de Estudiantes</h1>

    <?php
    $asignaturas = [
        "Matemáticas" => [
            "Juan" => [3, 5, 7, 8, 9],
            "Ana" => [6, 6, 7, 9, 10]
        ],
        "Ciencias" => [
            "Juan" => [4, 6, 6, 8, 7],
            "Ana" => [5, 7, 8, 8, 9]
        ]
    ];

    foreach ($asignaturas as $asignatura => $estudiantes) {
        echo "<div class='asignatura'>$asignatura</div>";
        
        foreach ($estudiantes as $nombre => $notas) {
            $notas_str = implode(" y ", array_slice($notas, 0, 2)); 
            $promedio = array_sum($notas) / count($notas); 
            
            echo "<div class='estudiante'>$nombre ha sacado un $notas_str, y su media es " . round($promedio, 2) . ".</div>";
        }
    }
    ?>

</div>

</body>
</html>
