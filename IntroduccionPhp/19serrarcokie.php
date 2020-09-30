<?php

unset ($_COOKIE['nombre']);
setcookie('nombre','',time()-100);
unset ($_COOKIE['unyear']);
setcookie('unyear','',time()-100);

header('Location:19ver_cookies.php')
?>