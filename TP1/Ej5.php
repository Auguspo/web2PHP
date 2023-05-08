<?php

if (!empty($_POST)) {
    $Altura = $_POST['Altura'];
    $Peso = $_POST['Peso'];
    
    $imc= $Peso / ($Altura ** 2);
    if ($imc < 18.5) {
        echo "Bajo peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "Sobrepeso";
    } else {
        echo "Obesidad";
    }
    
}
?>

<form method="post" action="Ej5.php">
    <label>Altura:</label><input type="number" step="0.01" name="Altura">
    <label>Peso</label><input type="number" step="0.01" name="Peso">
    <input type="submit" />
</form>
<a