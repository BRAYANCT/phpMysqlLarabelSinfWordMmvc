<style>
    *{background-color: #000000;
    color:#ffffff}
</style>
<?php

/* echo rand(10,40);
gettype(null); */


$year =2020;

// unset($year);
var_dump($year);
echo "<br>";
$texto="      ";
if (empty(trim($texto))) {
echo 'la variable esta vacia  ' ."<br>".$texto."<br>";
}else{
    echo'la variable tiene contenido  '."<br>".$texto."<br>";
}

$frse=("pepito va por la botella de cerveza para tener  una vida feliz");
echo strpos($frse,'botellas');

//remplazar ocntenido de un string

$frse=str_replace("cerveza","wisky",$frse);
echo $frse;
//mayusculas y minusculas
echo "<br>";
echo strtolower(($frse));
echo "<br>";
echo strtoupper($frse);