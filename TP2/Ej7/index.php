<?php

function base(){
$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://'.$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]).'/">
    <title>Figuras</title>
</head>
<body>

    <h1>Figuras</h1>

    <a href="lista/">Ver todas las figuras geométricas</a>


    <h4> <h4>
    <form action="filtro.php" method="GET">
        <label for="area">Buscar figuras con área menor a: </label>
        <input id="area" type="number" name="area" placeholder="Introduzca área...">
        <button type="submit">Buscar</button>
    </form>
    
</body>
</html>';

return $html;
}

?>