<title>Sesiones</title>

<?php

//sesion almacena y persiste datos del usuario que naveda en el sitio web hasta que cierra sesion o cierra el navegador

session_start();

$variableNormal="Soy una cadena de texto";

echo $_SESSION['$variableNormal']="soy una sesion activa";

echo "<br>";

var_dump( $variableNormal);

session_destroy();