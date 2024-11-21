<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generar Contraseña Aleatoria</title>
</head>
<body>
    <h2>Generar Contraseña Aleatoria</h2>
    <?php
    function generarContraseña() {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%&-';
        $longitud = rand(8, 12);
        $contraseña = '';

        for ($i = 0; $i < $longitud; $i++) {
            $contraseña .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }

        return $contraseña;
    }

    echo "Contraseña generada: " . generarContraseña();
    ?>
</body>
</html>
