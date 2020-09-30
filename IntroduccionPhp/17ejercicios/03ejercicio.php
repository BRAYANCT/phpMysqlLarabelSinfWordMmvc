<?php
$texto=" ";

if(empty(trim($texto))){
    $texto="hola amigos como estan espero bien";
    $tst=strtoupper($texto);
    echo $tst;
} else{
    echo 'la variable no esta bacia '.$texto;
} 