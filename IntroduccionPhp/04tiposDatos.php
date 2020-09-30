<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipod de Datos</title>
</head>
<body>
    <h1>Master en PHP-Tipos de Datos</h1>    

    <?php
                $miPrimeraVariable="Hola mundo desde \" \" variables";
                echo var_dump($miPrimeraVariable)."<br>";
                $numero =15;
                $numero =1515;
                echo gettype($numero)."<br>";
                $decimal=153.5;
                echo gettype($decimal)."<br>";
                $verdadero=true;
                echo gettype($verdadero)."<br>";
                $nulo=null;
                echo gettype($nulo)."<br>";
                $arrays=['true','asd','asdd'];
                echo gettype($arrays)."<br>";
              /*   $indefinido=undefined;
                echo gettype($indefinido)."<br>"; */
                                  
                $verdad="true";
                var_dump($verdad)."<br>";
   

    ?>

</body>
</html>