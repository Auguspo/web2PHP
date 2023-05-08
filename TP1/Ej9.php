<?php

if (!empty($_POST)) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    $Genero = $_POST['Genero'];
    $Pais = $_POST['Pais'];
    $intereses = array();

    if (isset($_POST['deportes'])) {
      $intereses[] = 'Deportes';
    }

    if (isset($_POST['arte'])) {
      $intereses[] = 'Arte';
    }

    if (isset($_POST['viajes'])) {
      $intereses[] = 'Viajes';
    }

    if (isset($_POST['tecnologia'])) {
      $intereses[] = 'Tecnología';
    }

    if (isset($_POST['cine'])) {
      $intereses[] = 'Cine';
    }
    echo ('Nombre: ' . $Nombre . '.Apellido: ' . $Apellido . '.Edad: ' . $Edad . '.Genero: ' . $Genero . '.Pais: ' . $Pais . 'Los intereses seleccionados son: ' . implode(', ', $intereses));
}
?>

<form method="post" >
    <label>Nombre</label><input type="text" name="Nombre">
    <label>Apellido</label><input type="text" name="Apellido">
    <label>Edad</label><input type="number" name="Edad">


    <input type="radio" name="Genero" value="hombre" />
    <label>Hombre</label>

    <input type="radio" name="Genero" value="mujer" />
    <label>Mujer</label>

    <select name="Pais">
        <option value="ARG">ARG</option>
        <option value="BRA">BRA</option>
        <option value="PAR">PAR</option>
    </select>

    <label>
        <input type="checkbox" name="deportes" value="1">
        Deportes
    </label>

    <label>
        <input type="checkbox" name="arte" value="2">
        Arte
    </label>

    <label>
        <input type="checkbox" name="viajes" value="3">
        Viajes
    </label>

    <label>
        <input type="checkbox" name="tecnologia" value="4">
        Tecnología
    </label>

    <label>
        <input type="checkbox" name="cine" value="5">
        Cine
    </label>
    <input type="submit" />
</form>
<a