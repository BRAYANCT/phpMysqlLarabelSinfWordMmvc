<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUCLES</title>
</head>
<body>
    <h1>Master en PHP-BUCLES</h1>    
    <?php
        $numeros=15;
        for ($i=0; $i <$numeros ; $i++) { 
           echo 'el numero es'. $numeros.'X'.$i.'='.($numeros*$i).'<br>';
        }
        echo '<br>';
        echo '<hr>';
        $a=0;
        while ($a <= 100) {
            echo '  '.$a;
            if ($a!=100) {
                echo ' , ';
            }
       
            $a++;
        }
        echo '<br>';
        echo '<hr>';

        //ejemplo de bucles;
        if (isset($_GET['numero'])) {
            $numero=(int)$_GET['numero'];
        }else{
            $numero=11;
        }
        var_dump($numero);

         echo '<br>';
        echo '<hr>';
/* 
        for ($i=0; $i <=$numero ; $i++) { 
            echo 'el numero es'. $numero.'X'.$i.'='.($numero*$i).'<br>';
         } */
         $a=1;
         while ($a <= 15) {
             echo "$numero X $a =".($numero*$a) ."<br>";
             $a++;
         }
         $edad=17;
         $contador=12;
         do {
             echo "Tienes acceso al local privado $contador"."<br>";
             $contador++;
         } while ($edad >=18 && $contador<=10);
    ?>    
</body>
</html>