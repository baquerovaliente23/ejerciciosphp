<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Número Más Frecuente</title>
</head>
<body>
    <h2>Número Más Frecuente</h2>
    <?php
    function numeroMasFrecuente() {
        $numeros = func_get_args();
        $frecuencia = array_count_values($numeros);
        arsort($frecuencia);
        return key($frecuencia);
    }

    echo "Número más frecuente: " . numeroMasFrecuente(1, 2, 2, 3, 3, 3, 4);
    ?>
</body>
</html>
