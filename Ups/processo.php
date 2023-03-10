<?php

$cookie_name = "Caos";
$cookie_value = "36242400";
setcookie($cookie_name, $cookie_value,time() + 86400);


if(isset($_COOKIE[$cookie_name])){
    echo 'Você de novo???';
}else{
    echo 'Quem é você?';
    setcookie('Caos', 'senha', time() + 360);
}

// $_SESSION 


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