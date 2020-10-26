<?php

/* CONECTAR A LA BASE DE DATOS */

$conexion=mysqli_connect("localhost","root","","phpMysql");

/* Comprobar si la conexion es correcra  */
if (mysqli_connect_errno()) {
    echo 'la conexion a la base de datos MYSQL ha fallado'. mysqli_connect_errno(),'<br>';
}else{
    echo 'conexion realizada correctamente <br>';
}

/* Configurar la configuracion de caracteres */

mysqli_query($conexion,"SET  NAMES 'utf-8'");

/* Consulta desde mysql */

$query= mysqli_query($conexion,"SELECT * FROM notas");

while ($nota =mysqli_fetch_assoc($query)) {
    
    //var_dump($nota);
    echo "$nota[titulo] - $nota[descripcion] - $nota[color] <br>";
    //echo "$nota[descripcion] <br>";
}
/* $sql="INSERT INTO notas VALUES(null,'editar','editar desde php','elefante')";

$insert=mysqli_query($conexion,$sql);
if ($insert) {
    echo "Datos insertados correctamente";
}else{
    echo "ERROR : ". mysqli_errno($conexion);
} */