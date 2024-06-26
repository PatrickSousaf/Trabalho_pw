<?php

    if (!empty($_POST['email']) && !empty($_POST['psw'])) {

        $email = $_POST['email'];
        $psw = $_POST['psw'];

        $sql = "SELECT * FROM usuarios WHERE email = ?";
        require_once "conexao.php";

        $pdo = require "conexao.php";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($_POST['psw'], $usuario['senha'])) {
            if (count($usuario) != "0") {
                if(!isset($_SESSION)) {
                    session_start();
                }
    
                $_SESSION['email'] = $email;
                $_SESSION['psw'] = $psw;
                
                header("location: ../biblioteca/biblioteca.php");
            }
        }  else {
            header("location: ../login/index.php");
            echo "<script>window.alert('senha incorreta!')</script>";
        }
}