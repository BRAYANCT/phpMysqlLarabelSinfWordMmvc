<?php

$variblearray=array('asd','dsa','qwe');
$numero=1;
$texto="hola mundo";
$bol=true;


if (is_array($variblearray)) {
    echo'esto es un array'."<br>";
}
if (is_string($texto)) {
    echo'esto es una letra'."<br>";
}
if (is_bool($bol)) {
    echo 'esto es un boleano'."<br>";
}
if (is_integer($numero)) {
    echo 'esto es un numero' ."<br>";
}
var_dump($variblearray);