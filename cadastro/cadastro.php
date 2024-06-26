<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <style>
        body{
            background: url(neon-light-bathroom-sign-night.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<body>
    <style>
        
    </style>
    <form action="../back/Cadastro.php" method="post">
        <div class="imgcontainer">
            <div class="container">
                <div id="box">
                    <label for="título"><h3>Criar uma conta</h3></label>

                    <p for="name">NOME</p>
                    <input type="text" name="name" required>
                    
                    <p for="email">E-MAIL</p>
                    <input type="email" name="email" required>

                    <p for="psw">SENHA</p>
                    <input type="password"  name="psw" required>

                    <p for="confirm">CONFIRMAR A SENHA</p>
                    <input type="password"  name="password-confirm" required>

                    <button type="submit">Continuar</button>

                    <span class="psw">Já possui uma conta? <a href="../login/index.php">Entre aqui</a></span>

                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
