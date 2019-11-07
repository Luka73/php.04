<?php include_once 'validar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <h3>Painel do Sistema</h3>
    <?php echo "Seja bem-vindo(a) ".$_SESSION["nome"]; ?>
    <hr>
    <h4>Menu</h4>
    <a href="cadastrar.php">Cadastrar Usuário</a><br>
    <a href="consultar.php">Consultar Usuário</a><br>
    <a href="alterar-senha.php">Alterar Senha</a><br>
    <a href="sair.php">Sair</a>
</body>
</html>