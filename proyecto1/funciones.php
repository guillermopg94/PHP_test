<?php
function mostrarTexto($texto){
    echo $texto."\n";
}

function mostrarMes($mes) {
    $arrayMes=array("Enero","Febrero","Marzo","Abril","Mayo","junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

        echo $arrayMes[$mes-1]."\n";  
}

function mostrarArrAsociativo($clave,$valor) {
    global $arrayAsc;
    
    $arrayAsc[$clave]=$valor;

    foreach ($arrayAsc as $clave => $valor){
        echo "Asociativo[".$clave."] = ".$valor."<br>";

    }
}