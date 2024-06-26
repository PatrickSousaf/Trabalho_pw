<?php
session_start();

    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $edicao = $_POST['edicao'];
    $editora = $_POST['editora'];
    $ano = $_POST['ano'];


    $sql = "INSERT INTO biblioteca(autor, titulo, subtitulo, edicao, editora, ano)VALUES(:autor, :titulo, :subtitulo, :edicao, :editora, :ano)";

    $pdo = require "conexao.php";

    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([
        ':autor' => $autor,
        ':titulo' => $titulo,
        ':subtitulo' => $subtitulo,
        ':edicao' => $edicao,
        ':editora' => $editora,
        ':ano' => $ano
    ]);

    if ($result) {
        header("location: ../biblioteca/biblioteca.php");
}
