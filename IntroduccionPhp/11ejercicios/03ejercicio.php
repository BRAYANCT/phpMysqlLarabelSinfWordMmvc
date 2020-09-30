<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipod de FOR</title>
</head>
<body>
    <h1>Master en PHP-Ejercicio 3</h1>    

    <?php 

    $contador=0;
    while ($contador <= 40) {
        $cuadrado=$contador*$contador;
        echo $contador." = " .$cuadrado ."<hr>";
        $contador++;
    }


    ?>

</body>
</html>