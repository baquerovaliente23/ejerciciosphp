<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y sanitizar los datos
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
   
    // Mensaje de bienvenida
    echo "Bienvenido " . $nombre . " " . $apellido . "<br>";
   
    // Nombre y apellido al revés
    echo "Nombre al revés: " . strrev($nombre) . "<br>";
    echo "Apellido al revés: " . strrev($apellido) . "<br>";
   
    // Contar letras
    $longNombre = strlen($nombre);
    $longApellido = strlen($apellido);
    $totalLetras = $longNombre + $longApellido;
   
    echo "Número de letras en el nombre: " . $longNombre . "<br>";
    echo "Número de letras en el apellido: " . $longApellido . "<br>";
    echo "Número total de letras: " . $totalLetras . "<br>";
   
    // Nombre y apellido en mayúsculas
    echo "Nombre en mayúsculas: " . strtoupper($nombre) . "<br>";
    echo "Apellido en mayúsculas: " . strtoupper($apellido) . "<br>";
   
    // Primer y último carácter
    echo "Primer carácter del nombre: " . $nombre[0] . "<br>";
    echo "Último carácter del nombre: " . $nombre[$longNombre - 1] . "<br>";
    echo "Primer carácter del apellido: " . $apellido[0] . "<br>";
    echo "Último carácter del apellido: " . $apellido[$longApellido - 1] . "<br>";
   
    // Cambiar vocales por 'u'
    $nombreConVocalesCambiadas = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $nombre);
    $apellidoConVocalesCambiadas = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $apellido);
   
    echo "Nombre con vocales cambiadas por 'u': " . $nombreConVocalesCambiadas . "<br>";
    echo "Apellido con vocales cambiadas por 'u': " . $apellidoConVocalesCambiadas . "<br>";

    // Operaciones con números
    $numero1 = (float)$_POST['numero1'];
    $numero2 = (float)$_POST['numero2'];
   
    echo "Suma: " . ($numero1 + $numero2) . "<br>";
    echo "Diferencia: " . ($numero1 - $numero2) . "<br>";
    echo "Cociente: " . ($numero2 != 0 ? ($numero1 / $numero2) : 'Indefinido') . "<br>";
    echo "Producto: " . ($numero1 * $numero2) . "<br>";
}
?>
