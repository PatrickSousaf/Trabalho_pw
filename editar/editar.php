<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="editar.css">
    <title>Editar Livro</title>
</head>
<body>
    <header class="header">
    </header>
    <section class="home"> 
        <div class="box">
            <h2>Editar Livro</h2>
            <form action="../back/update.php" method="post">
                <div class="input-box">
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" id="autor" value="<?php echo isset($autor) ? $autor : ''; ?>">

                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo isset($titulo) ? $titulo : ''; ?>">

                    <label for="subtitulo">Subtítulo:</label>
                    <input type="text" name="subtitulo" id="subtitulo" value="<?php echo isset($subtitulo) ? $subtitulo : ''; ?>">

                    <label for="edicao">Edição:</label>           
                    <input type="text" name="edicao" id="edicao" value="<?php echo isset($edicao)? $edicao : '';?>">

                    <label for="editora">Editora:</label>
                    <input type="text" name="editora" id="editora" value="<?php echo isset($editora)? $editora : '';?>">

                    <label for="ano">Ano:</label>
                    <input type="text" name="ano" id="ano" value="<?php echo isset($ano)? $ano : '';?>">

                    <input type="hidden" name="id" value="<?php echo isset($id)? $id : '';?>"><br>


                    <input type="submit" name="update" value="Salvar alterações">
                </div>
            </form>
        </div>
    </section>
</body>
</html>