<?php

$nome = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['psw'];
$senhaConfi = $_POST['password-confirm'];

if ($senha !== $senhaConfi){

    echo "‹script› window.alert('senha incorreta!')</script>";
    header ("location: ../cadastro/cadastro.php");

} else{

    $senha = password_hash($senhaConfi,PASSWORD_DEFAULT);

    $pdo = require "conexao.php";;

    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES( :nome, :email, :senha)";

    $stmt = $pdo->prepare($sql);

    $resultado = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ]);

    if ($resultado) {
        header('Location: ../login/index.php');
    } else {
        header('Location: ../cadastro/cadastro.php');
    }

}

