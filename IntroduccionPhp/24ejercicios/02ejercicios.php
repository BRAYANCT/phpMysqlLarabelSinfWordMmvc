<?php

function validarEmail($email)
{
    $status="No valido";
    if (!empty($email)&&filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $status="Validado";
    }
    return $status;
}
if (isset($_GET['email'])) {
    echo validarEmail(($_GET["email"]));
}else{
    echo 'Pasa por get un email...';
}
?>