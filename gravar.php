<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
    <body class="container">

        <?php
        $nome       = $_POST["nome"];
        $email      = $_POST["email"];
        $login      = $_POST["login"];
        $senha      = md5($_POST["senha"]);
        $perfil     = $_POST["perfil"];
         
        include_once 'conexao.php';
        $sql = "INSERT INTO usuarios VALUES(null,'{$nome}','{$email}','{$login}','{$senha}','{$perfil}')";
        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Gravado com sucesso!</p>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao gravar!</p>";
        } ?>
        <br>
        <a href="index.php">Página Inicial</a>
    </body>
</html>