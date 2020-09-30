<style>
    *{background-color: #000000;
    color:#ffffff}
</style>
<?php

/*Funciones;*/
echo"<hr>";
echo"<br>"; 
echo"<hr>";
function NameCLass($nombre1,$nombre2,$nombre3,$nombre4)
{
/* $nombre1='hola amigos';
   $nombre2='hola amigos';
   $nombre3='hola amigos';
   $nombre4='hola amigos'; */
   echo ($nombre1*$nombre2)."<br>";
   echo ($nombre2/$nombre3)."<br>";
   echo $nombre3."<br>";
   echo $nombre4."<br>";
}
 NameCLass(55,66,73,54);

 echo"<hr>";

function cal($nu1,$nu2,$negrita=false) 
{
    $cadena=" ";

    if ($negrita!=false) {
        $cadena .= "<h1>";
    }
     $cadena .= "La suma es :  ".($nu1+$nu2)."<br>";
     $cadena .= "La resta es :  ".($nu1-$nu2)."<br>";
     $cadena .= "La multiplicar es :  ".($nu1*$nu2)."<br>";
     $cadena .= "La dividir es :  ".($nu1/$nu2)."<br>";

    /*  $cadena .="<hr>"; */
    
    if ($negrita!=false) {
        $cadena .= "</h1>";
    }
    $cadena .="<hr>";
    /* var_dump( $cadena); */
    return $cadena;
}

echo cal(15,3,true);



function devuelve($nombre)
{
    return 'devuelve';
}
echo devuelve('brayan');
echo"<hr>";

echo"<hr>";
function devolverNombre($nombres,$apellidos)
{
    $texto="El nombre es : ". $nombres ."<br>"."Los apellidos son " .$apellidos;
    return $texto;
}
echo devolverNombre("brayan","capcha taype");


