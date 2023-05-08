<?php


$elementos = [];
if(!empty($_POST))$largo = $_POST['largo'];

echo "<ul>";
for ($i = 0; $i <= $largo; $i++){
    $elemento[$i]="Elemento " . $i;
    echo $elemento[$i];
    echo "<br/>";
}
echo "</ul>";
?>

<form method="POST" action="Ej4.php">
    <label>Ingrese la cantidad de elemento en la lista: </label><input name="largo" type="number"/>
    <input type="submit"/>
</form>