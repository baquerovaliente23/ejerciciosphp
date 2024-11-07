<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenar Empleados por Nombre</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #e6f2ff; }
        h2 { color: #4682b4; text-align: center; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #4682b4; color: white; }
    </style>
</head>
<body>
    <h2>Empleados y Salarios</h2>
    <table>
        <tr><th>Empleado</th><th>Salario</th></tr>
        <?php
        $empleados = ["Juan" => 3000, "Ana" => 3500, "Luis" => 2800, "María" => 3100, "Carlos" => 2900];
        ksort($empleados); // Ordenar por clave

        foreach ($empleados as $empleado => $salario) {
            echo "<tr><td>$empleado</td><td>\$$salario</td></tr>";
        }
        ?>
    </table>
</body>
</html>
