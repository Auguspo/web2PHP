<?php
$action = $_GET["action"];

if($action == ''){
    menu();
}else{
    if (isset($action)){
        
        $partesURL = explode("/", $action);
        if($partesURL[0] == 'tabla'){
            if($partesURL[1] >0)
                tabla($partesURL[1]);

        }
    }
}

function menu(){
    echo '<a href="/tp2/tabla/5">Tabla del 5</a><br>';
    echo '<a href="/tp2/tabla/10">Tabla del 10</a><br>';
    echo '<a href="/tp2/tabla/20">Tabla del 20</a><br>';
};

function tabla($rango){

$largo=$rango;

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
}
?>
<style>
table, th, td {
  border:1px solid black;
  margin:auto;
}
</style>
