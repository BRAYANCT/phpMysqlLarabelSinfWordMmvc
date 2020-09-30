<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipod de FOR</title>
</head>
<body>
    <h1>Master en PHP-Ejercicio</h1>    

    <?php 

   $numero1=100;
   $numero2=0;
   for ($i=0; $i <=100 ; $i++) { 
       //numeros pares
       if ($i%2==0) {

          echo "$i " ."<br>";
      
      } 
      //numeros impares
  /*     if ($i%2!=0) {

        echo "$i " ."<br>";
    
    } */
   }
    ?>

</body>
</html>