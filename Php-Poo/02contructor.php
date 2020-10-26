<style>
*{
    background-color: #000000;
    color: #ffffff;
}
</style>
<?php 

require_once '01clases.php';

$coche=new  Coche("amarrillo","FERrary" ,"roseishon");
$coche2=new Coche("verde","lamborgini" ,"roseishon");
$coche3=new Coche("azul","audi" ,"roseishon");
$coche4=new Coche("rosado","esteishon" ,"roseishon");

echo $coche->mostrarInformacion($coche2);

//echo $coche->mostrarInformacion("hola mundo");

/* var_dump($coche);
echo '<br>';
var_dump($coche2);
echo '<br>';
var_dump($coche3);
echo '<br>';
var_dump($coche4); */