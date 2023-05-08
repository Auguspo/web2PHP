<?php
require_once "lista.php";
require_once "index.php";

$action = $_GET["action"];
if($action == ''){
    echo base();}
    else{
        $partesURL = explode("/", $action);
        if($partesURL[0] == 'lista'){
            lista();
        }
    }

?>