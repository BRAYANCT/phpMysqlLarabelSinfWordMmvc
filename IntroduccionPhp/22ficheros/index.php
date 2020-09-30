<?php
//abrir archivo
$abrirfichero=fopen("gichero.txt","r");

$contenido=fgets($abrirfichero);
echo $contenido;
//cerrar archivo
fclose($abrirfichero);

?>