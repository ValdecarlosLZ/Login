<?php
$user = $_POST["user"];
$password = $_POST["password"];
$erro = FALSE;

if(empty($user)OR strstr($user,'')){
    print_r("Inseira seu nome de usuário");
    $erro = true;
}

if(empty($password) OR strlen($password)< 8){
    print_r("Insira uma senha valida (maior que 8 digitos)");
    $erro = true;
}
    ?>