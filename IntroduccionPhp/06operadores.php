<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipod de Operadores</title>
</head>
<body>
    <h1>Master en PHP-Tipos de Operadores</h1>    

    <?php 
        /* Operadores aritmeticos + - * / \ % */
        $numero1=55;
        $numero2=25;
  
        echo 'suma : '.($numero1+$numero2).'<br>';
        echo 'resta : '.($numero1-$numero2).'<br>';
        echo 'multiplicar : '.($numero1*$numero2).'<br>';
        echo 'dividir : '.($numero1/$numero2).'<br>';
        echo 'dividir resto : '.($numero1%$numero2).'<br>';
        
        /* Operadores de incremento o decremento */

        $anio=2020;
        $anio++;
        $anio--;
        echo $anio.'<br>';
        /* Operadores de asignacion */
        $edad=55;

        echo ($edad+=5).'<br>';
        echo ($edad-=5).'<br>';
        echo ($edad*=5).'<br>';
        echo ($edad/=5).'<br>';
        echo ($edad%=5).'<br>';



    ?>

</body>
</html>