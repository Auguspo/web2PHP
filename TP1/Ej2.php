<?php
// Crear un arreglo de elementos
$elementos = array("Elemento 1", "Elemento 2", "Elemento 3");

// Generar la lista HTML
echo "<ul>";
foreach ($elementos as $elemento) {
    echo "<li>$elemento</li>";
}
echo "</ul>";
?>