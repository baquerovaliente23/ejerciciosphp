<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primos entre 1 y un Millón</title>
</head>
<body>
    <h2>Primos entre 1 y un Millón</h2>
    <?php
    function esPrimo($numero) {
        if ($numero < 2) return false;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) return false;
        }
        return true;
    }

    for ($i = 1; $i <= 1000000; $i++) {
        if (esPrimo($i)) {
            echo $i . "<br>";
        }
    }
    ?>
</body>
</html>