<?php
date_default_timezone_set("America/Lima");
function imprimirHora() {

    $fecha = date("d/m/Y H:i:s");

    return $fecha; 
}

$date = imprimirHora();

echo $date;