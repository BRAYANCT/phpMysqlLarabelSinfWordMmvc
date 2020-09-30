<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipod de FOR</title>
</head>
<body>
    <h1>Master en PHP-Tipos de FOR</h1>    

    <?php 
    //Bucle for
     /*  for ($i=0; $i <= 10; $i++) { } */
    $resu=0;
     for ($i=0; $i <=100 ; $i++) { 
            echo "el numero $i = " .($resu+=$i)."<br>" ;
     }
     echo "<hr>"; 
     $z=15;
     for ($a=0; $a <=10 ; $a++) { 
         if ($z==15) {
         echo 'no se puede mostrar estas operaciones';
         break;
         }
            echo"tabla de $z X $a =".($z*$a)."<br>" ;
     }
     
    ?>

</body>
</html>