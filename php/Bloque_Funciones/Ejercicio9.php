<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar Contraseña</title>
</head>
<body>
    <h2>Validar Contraseña</h2>
    <?php
    function validarContraseña($contraseña) {
        return (strlen($contraseña) > 8 &&
                preg_match('/[A-Z]/', $contraseña) &&
                preg_match('/[a-z]/', $contraseña) &&
                preg_match('/\D/', $contraseña));
    }

    echo validarContraseña("Contraseña1") ? "Contraseña válida" : "Contraseña inválida";
    ?>
</body>
</html>
