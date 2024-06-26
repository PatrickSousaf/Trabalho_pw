<?php

if (!empty($_GET['id'])) {
    $pdo = require_once "conexao.php";
    $id = $_GET['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM biblioteca WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header("location:../biblioteca/biblioteca.php");
        exit;
    } catch (PDOException $e) {
        echo "Erro ao deletar livro: ". $e->getMessage();
    }
}