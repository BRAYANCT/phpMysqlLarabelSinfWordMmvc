<?php

session_start();

if (!isset($_SESSION["numero"])) {

    $_SESSION['numero']= 0;
    
}
if (isset($_GET['counter'])&&$_GET['counter']==1) {
    $_SESSION['numero']++;
}
if (isset($_GET['counter'])&&$_GET['counter']==0) {
    $_SESSION['numero']--;
}
?>

<h1>valor de la sesion es   : <?=$_SESSION['numero']?>  </h1>

<a href="01ejercicios.php?counter=1">aumentar el valor</a><br>
<a href="01ejercicios.php?counter=0">disminuir el valor</a>