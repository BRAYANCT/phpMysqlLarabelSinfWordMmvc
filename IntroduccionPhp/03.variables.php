<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Master en PHP-Variables</h1>    

    <?php
        
        $miPrimeraVariable="Hola mundo desde variables";
        echo gettype($miPrimeraVariable)."<br>";
        $numero =15;
        $numero =1515;
        echo var_dump($numero)."<br>";
        $decimal=153.5;
        echo var_dump($decimal)."<br>";
        $verdadero=true;
        echo var_dump($verdadero)."<br>";



    ?>

</body>
</html>