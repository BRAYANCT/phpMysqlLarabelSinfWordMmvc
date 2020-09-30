<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1>Master en PHP-Condicionales</h1>    
    <?php
    $numero1=15;
    $numero2=15;
/* 
    if ($numero1==$numero2) {
        echo 'Los numeros son iguales';    
    }else{
        echo 'los numeros no son iguales';
    }
     */
    $numero1=3;
     if ($numero1==1) {
         echo'lUNES';
     
     }elseif ($numero1==2) {
        echo'MARTES';
     }elseif ($numero1==3) {
        echo'MIERCOLES';
     }elseif ($numero1==4) {
        echo'JUEVES';
     }elseif ($numero1==5) {
        echo'VIERNES';
     }elseif ($numero1==6) {
        echo'SABADO';
     }elseif ($numero1==7) {
        echo'DOMINGO';
     }else{
         echo 'No es ningun dia de la semana';
     }
     echo '<br>';

     $numero1=18;
     $numero2=50;
     $edad=25;

     if ($edad>=$numero1 && $edad<=$numero2) {
         echo 'Usted no se encuentra en edad de trabajar tiene : '.$edad;
     
     }else{
         echo 'NO puede trabajar';
     }
     echo '<br>';

     switch ($dia=3) {
         case $dia==1:
            echo 'LUNES';
             break;
         case $dia==2:
            echo 'MARTES';
             break;
         case $dia==4:
            echo 'MIERCOLES';
             break;
         default:
         echo 'selecione un dia valido';
     }
     echo '<br>';
     //goto
     goto marca;
     echo '<h1>INtruccion 1 goto</h1>';
     echo '<h1>INtruccion 1 goto</h1>';
     echo '<h1>INtruccion 1 goto</h1>';
     echo '<h1>INtruccion 1 goto</h1>';
     
     echo '<br>';   
     
     marca:
     echo '<h1>INtruccion 3 goto</h1>';
     echo '<br>';   

     

    ?>    
</body>
</html>