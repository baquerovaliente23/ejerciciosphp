<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicar Descuento</title>
</head>
<body>
    <h2>Aplicar Descuento a un Precio</h2>
    <?php
    function aplicarDescuento($precio, $descuento) {
        return $precio - ($precio * ($descuento / 100));
    }

    echo "Precio después del descuento: " . aplicarDescuento(100, 20);
    ?>
</body>
</html>
