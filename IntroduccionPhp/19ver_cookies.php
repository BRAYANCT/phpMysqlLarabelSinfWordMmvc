<?php
//para usar una cookies se usa $_COOKIE, es una varaibles supergloobales

if (isset($_COOKIE['nombre'])) {
        echo " mi cookie ". $_COOKIE['nombre'];
}else{
    echo "no existe una cookie";
}
echo "<hr>";

if (isset($_COOKIE['unyear'])) {
    echo " mi cookie ". $_COOKIE['unyear'];
}else{
echo "no existe una cookie";
}
?>

<a href="19serrarcokie.php">borrarcookies</a>
<a href="19cookies.php">cookies</a>