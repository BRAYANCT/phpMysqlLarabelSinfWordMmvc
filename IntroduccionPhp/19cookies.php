<title>Cookies</title>

<h1>Cookies</h1>
<style>
    *{
        background-color: #000000;
        color: #ffffff;
    }
</style>
<?php
echo "<br>";
echo 'Cookies';
echo "<hr>";

/* 
setcookie("nombre","valor que solo  puede ser texto",$caducidad ,$ruta, dominio);
*/
echo setcookie("nombre","valor que solo  puede ser texto");

echo "<hr>";
 
echo setcookie("unyear","valor de 365 dias",time()+(60*60*24*365));

?>

<a href="19ver_cookies.php">ver cookies</a>