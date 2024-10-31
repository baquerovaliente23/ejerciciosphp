<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
   
    echo "Bienvenido " . $nombre . " " . $apellido . "<br>";
   
    echo "Nombre al revés: " . strrev($nombre) . "<br>";
    echo "Apellido al revés: " . strrev($apellido) . "<br>";
   
    $longNombre = strlen($nombre);
    $longApellido = strlen($apellido);
    $totalLetras = $longNombre + $longApellido;
   
    echo "Número de letras en el nombre: " . $longNombre . "<br>";
    echo "Número de letras en el apellido: " . $longApellido . "<br>";
    echo "Número total de letras: " . $totalLetras . "<br>";
   
    echo "Nombre en mayúsculas: " . strtoupper($nombre) . "<br>";
    echo "Apellido en mayúsculas: " . strtoupper($apellido) . "<br>";
   
    echo "Primer carácter del nombre: " . $nombre[0] . "<br>";
    echo "Último carácter del nombre: " . $nombre[$longNombre - 1] . "<br>";
    echo "Primer carácter del apellido: " . $apellido[0] . "<br>";
    echo "Último carácter del apellido: " . $apellido[$longApellido - 1] . "<br>";
   
    $nombreConVocalesCambiadas = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $nombre);
    $apellidoConVocalesCambiadas = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $apellido);
   
    echo "Nombre con vocales cambiadas por 'u': " . $nombreConVocalesCambiadas . "<br>";
    echo "Apellido con vocales cambiadas por 'u': " . $apellidoConVocalesCambiadas . "<br>";

    $numero1 = (float)$_POST['numero1'];
    $numero2 = (float)$_POST['numero2'];
   
    echo "Suma: " . ($numero1 + $numero2) . "<br>";
    echo "Diferencia: " . ($numero1 - $numero2) . "<br>";
    echo "Cociente: " . ($numero2 != 0 ? ($numero1 / $numero2) : 'Indefinido') . "<br>";
    echo "Producto: " . ($numero1 * $numero2) . "<br>";
}
?>
