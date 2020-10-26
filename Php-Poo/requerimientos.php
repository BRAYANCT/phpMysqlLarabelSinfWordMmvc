<?php

require_once "03erencias.php";

//$personas=new Persona();
//$personas->setNombre("brayan");
//var_dump($personas);
//echo '<br>';
//echo '<br>';


//$informatico=new Informatico();
//$informatico->setAltura("190");
//$informatico->sabeLenguajes("PHP , JS , CSS ,HTML,PYTOIN,RUBY");
//var_dump($informatico)."<br>";

//echo '<br>';
//echo '<br>';

//$tecnico=new TecnicoRedes();
//$tecnico->auditoria();
//var_dump($tecnico);

require_once "04configuracion.php";


//$conf=new ConfiguracionStatic();
ConfiguracionStatic::setColor("blue");
ConfiguracionStatic::setNewletter("local");
ConfiguracionStatic::setEntorno("Linux");
echo ConfiguracionStatic::$color;
echo ConfiguracionStatic::$newletter;
echo ConfiguracionStatic::$entorno;
