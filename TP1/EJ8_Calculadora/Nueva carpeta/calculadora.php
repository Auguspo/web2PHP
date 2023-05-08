<?php
    if(!is_numeric($_REQUEST['num1']) || !is_numeric($_REQUEST['num1']) || empty($_REQUEST['operacion'])){
        echo('Error de paramtros');
    }
    $operando1 = $_REQUEST['num1'];
    $operando2 = $_REQUEST['num2'];
    $operador = $_REQUEST['operacion'];

    switch ($operador) {
        case 'sumar': {
                $resultado = $operando1 + $operando2;
                break;
            }

        case 'restar': {
                $resultado = $operando1 - $operando2;
                break;
            }

        case 'multiplicar': {
                $resultado = $operando1 * $operando2;
                break;
            }

        case 'dividir': {
                $resultado = $operando1 / $operando2;
                break;
            }
    }   

    echo ('El resultado es : ' . $resultado);
?>