<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>

<body>
    <?php
    echo "<p><h2>Login executado com sucesso! </h2></p><hr>";
    echo "Usuário: " . $_GET['user'] . "<hr>";
    echo "Senha: " . $_GET['password'] . "<hr>";
    echo "Usuário: " . $_POST['user'] . "<hr>";
    echo "Senha: " . $_POST['password'] . "<hr>";
    ?>
</body>

</html>