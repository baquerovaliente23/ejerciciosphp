<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar si un Número es Primo</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #FAFAD2; }
        h2 { color: #DAA520; text-align: center; }
        p { text-align: center; font-size: 1.2em; }
    </style>
</head>
<body>
    <h2>¿Es Primo?</h2>
    <?php
    $numero = rand(1, 100);
    $esPrimo = true;
    
    if ($numero < 2) {
        $esPrimo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
    }
    
    echo "<p>Número elegido: $numero</p>";
    echo "<p>¿Es primo?: " . ($esPrimo ? "Sí, es un número primo." : "No, no es un número primo.") . "</p>";
    ?>
</body>
</html>
