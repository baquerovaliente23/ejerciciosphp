<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Animales Modificados</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f7f6; }
        h2 { color: #8b4513; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #8b4513; color: white; }
        td { text-align: center; }
    </style>
</head>
<body>
    <h2>Lista de Animales (Modificado)</h2>
    <table>
        <tr><th>Animal</th></tr>
        <?php
        $animales = ["Perro", "Gato", "Pájaro", "Conejo", "Tortuga"];
        $animales[2] = "Hámster";

        foreach ($animales as $animal) {
            echo "<tr><td>$animal</td></tr>";
        }
        ?>
    </table>
</body>
</html>
