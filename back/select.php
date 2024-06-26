<?php
$pdo = require "conexao.php";

$sql = "SELECT * FROM biblioteca";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $livros; 