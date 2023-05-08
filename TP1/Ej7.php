<!DOCTYPE html>
<html>
<head>
	<title>Simulador de inversión</title>
</head>
<body>
	<h1>Simulador de inversión</h1>
	<form method="POST" >
		<label>Cantidad a invertir:</label>
		<input type="number" name="cantidad" required><br><br>
		<label>Porcentaje de interés mensual:</label>
		<input type="number" name="interes" required><br><br>
		<input type="submit" value="Calcular">
	</form>
	<br>

</body>
</html>
<?php 

$cantidad = $_POST["cantidad"];
$interes = $_POST["interes"];
$saldo = $cantidad;
echo "<table border='1'>
<tr>
    <th>Mes</th>
    <th>Saldo</th>
</tr>";
for ($i=1; $i<=12; $i++) {
    $interes_mes = $saldo * ($interes/100);
    $saldo += $interes_mes;
    echo "<tr>
    <td>".$i."</td>
    <td>$".number_format($saldo, 2)."</td>
    </tr>";
}
echo "</table>";

?>