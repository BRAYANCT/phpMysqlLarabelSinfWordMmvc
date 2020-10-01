<?php

         $resultado=false;
    if (isset($_POST['n1']) && isset($_POST['n2'])) {
      /*   $resultado=false; */
        if (isset($_POST['sumar'])) {
            $resultado='el resultado es : '.($_POST['n1'] + $_POST['n2']);
        }
        if (isset($_POST['restar'])) {
            $resultado='el resultado es : '.($_POST['n1'] - $_POST['n2']);
        }
        if (isset($_POST['multiplicar'])) {
            $resultado='el resultado es : '.($_POST['n1'] * $_POST['n2']);
        }
        if (isset($_POST['dividir'])) {
            $resultado='el resultado es : '.($_POST['n1'] / $_POST['n2']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 3</title>
</head>
<body>
    <h1>calculadora</h1>
    <form action="" method="POST">
        <label for="n1">n1</label>
        <input type="number" name="n1" id="n1" max="100" min="0"><br>
        <label for="n2">n2</label>
        <input type="number" name="n2" id="n2" max="100" min="0"><br>
        <label for="n3">n3</label>
        <input type="number" name="n3" id="n3" max="100" min="0" disabled><br>
        <input type="submit" value="sumar" name="sumar">
        <input type="submit" value="restar" name="restar">
        <input type="submit" value="multiplicar" name="multiplicar">
        <input type="submit" value="dividir" name="dividir">
    </form>
    <?php
        if ($resultado !=false) {
            echo $resultado;
        }
    ?>

</body>
</html>