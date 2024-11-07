<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Frutas</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; }
        h2 { color: #2e8b57; }
        table { width: 50%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #6b8e23; color: white; }
    </style>
</head>
<body>
    <h2>Lista de Frutas</h2>
    <table>
        <tr><th>Fruta</th></tr>
        <?php
        $frutas = ["Manzana", "Banana", "Naranja", "Fresa", "Kiwi", "Mango", "Piña", "Pera", "Durazno", "Uva"];
        foreach ($frutas as $fruta) {
            echo "<tr><td>$fruta</td></tr>";
        }
        ?>
    </table>
</body>
</html>
