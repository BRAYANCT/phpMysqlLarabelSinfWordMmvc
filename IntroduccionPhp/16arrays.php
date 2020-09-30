<?php

//un array es una colesccion o conjunto de datos

$colescciones=['pelicula','batman','superman','aquiaman'];
$indice=array(
    array(
        "nombre"=>"brayan",
        "apellido"=>"andrestayype",
        "sitioweb"=>"brayantaype.com",
    ),
    array(
        "nombre"=>"andres",
        "apellido"=>"taypeperes",
        "sitioweb"=>"taypeperes.com",
    )
);
//var_dump($indice[0]["nombre"]). "<br>";

sort($colescciones);

//añadir elementos a un array


var_dump ($colescciones) . "<br>";



/* var_dump($colescciones); */




for ($i=0; $i <count($colescciones) ; $i++) { 
   //
//   echo $colescciones[$i] . "<br>";
}

/* foreach ($colescciones as $colesccion) {
    
    echo $colesccion ."<br>";
}
 */
