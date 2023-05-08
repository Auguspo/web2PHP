<form method="POST" action="Ej6.php">
    <label>Ingrese la cantidad de elemento de la tabla: </label><input name="largo" type="number" />
    <input type="submit" />
</form>
<?php

$largo = $_POST['largo'];

echo "<table>";
echo "<tr><th></th>"; 
for ($i = 1; $i <= $largo; $i++) {
    echo "<th>" . $i . "</th>"; 
}
echo "</tr>";

for ($i = 1; $i <= $largo; $i++) {
    echo "<tr>";
    echo "<th>" . $i . "</th>"; 
    for ($j = 1; $j <= $largo; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<style>
table, th, td {
  border:1px solid black;
  margin:auto;
}
</style>
