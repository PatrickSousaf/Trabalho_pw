<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biblioteca.css">
    <title>biblioteca</title>
</head>
<body>
    <header class="header">
    </header>
    <section class="home">

        <section class="container-xl">
            <div class="my-book">
            <a href="">Meus livros</a>
            <a href="../cadLivro/addLivro.html">Adicionar livro</a>
            <a href="../cadastro/cadastro.php">Conta</a>
            </div>
            <table class="table table-xl table-light table-hover">
                <thead>
                    <th>Autor</th>
                    <th>Titulo</th>
                    <th>Sub-titulo</th>
                    <th>Edição</th>
                    <th>Editora</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                <?php
                        $livros = require_once '../back/select.php';
                        foreach($livros as $livro) {
                            echo <<<TABELA
                                <tr>
                                    <td>{$livro['autor']}</td>
                                    <td>{$livro['titulo']}</td>
                                    <td>{$livro['subtitulo']}</td>
                                    <td>{$livro['edicao']}</td>
                                    <td>{$livro['editora']}</td>
                                    <td>{$livro['ano']}</td>
                                    <td>
                                        <a href="../editar/editar.php?id=$livro[id]" class="btn btn-primary">editar</a>
                                        <a href='../back/delete.php?id=$livro[id]' class="btn btn-danger">excluir</a>
                                    </td>
                             TABELA;
                        }
                    ?>
           
                </tbody>
            </table>
            </section>
    </section>

   </body>
</html>



