<?php
session_start();
$login = $_POST["login"];
$senha = md5($_POST["senha"]);

include_once 'conexao.php';

$sql = "SELECT * FROM usuarios WHERE (login='{$login}'
OR email='{$login}') AND senha='{$senha}'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);   
    $_SESSION["login"] = $row["login"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["nome"] = $row["nome"];
    header("Location:painel.php");
}else{
    $msg = "Login/senha inválidos";
    header("Location:index.php?msg=".$msg);
}

?>