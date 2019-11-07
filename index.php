<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="col-4">
            <h2>Área Restrita</h2>
            <form action="verificar-login.php" method="post">
                <label>Login: </label>
                <input type="text" name="login" class="form-control">
                <label>Senha: </label>
                <input type="password" name="senha" class="form-control">
                <input type="submit" value="Entrar" class="btn btn-success mt-2">
            </form><br>
            <?php
           if(isset($_GET["msg"]))
                echo $_GET["msg"];
           ?>
        </div>
    </div>
</body>
</html>