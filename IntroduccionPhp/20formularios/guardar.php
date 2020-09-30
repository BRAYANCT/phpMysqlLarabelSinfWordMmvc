<?php


if (isset($_POST['nombre'])&&isset($_POST['apellidos']) &&isset($_POST['descipcion'])) {
    echo 'Datos recibidos' ;
    echo "<br>";
    echo $_POST['nombre'];
    echo "<br>";
    echo $_POST['apellidos'];
    echo "<br>";
    echo $_POST['descipcion'];
    echo "<br>";
    $num=$_POST['nombre'];
    echo " <input type='text' value='$num' disabled> ";
    header('location:index.html');
}else {
    echo 'Datos no recibido';
}