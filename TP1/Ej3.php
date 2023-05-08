<?php

if (!empty($_POST)) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    echo ('Nombre: ' . $Nombre . '.Apellido: ' . $Apellido . '.Edad: ' . $Edad);
}
?>

<form method="post" action="Ej3.php">
    <label>Nombre</label><input type="text" name="Nombre">
    <label>Apellido</label><input type="text" name="Apellido">
    <label>Edad</label><input type="number" name="Edad">
    <input type="submit" />
</form>
<a