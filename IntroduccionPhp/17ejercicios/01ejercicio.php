<?php

function mostrararray($numeros)
{
    $resultado="";
    foreach ($numeros as $numeros ) {
        $resultado.= $numeros."<br>";
    } 
    return $resultado;    
}

$numeros=array(68,15,1,2,53,51,4,59,6,7,8,9);

/* for ($i=0; $i <count($numeros) ; $i++) { 
    echo ($numeros[$i])."<br>";    
} */

echo mostrararray($numeros);
echo "<hr>";
sort($numeros);
echo mostrararray($numeros);
echo "<hr>";

echo count(($numeros));
echo "<hr>";

$busqueda=51;
if (array_search($busqueda,$numero)) {

}