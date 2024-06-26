<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="../back/login.php" method="post">
        <div class="imgcontainer">
            <div class="container">
                <div id="box">
                    <label for="título"><h3>Seja bem-vindo!</h3></label>
                    
                    <p for="email">•E-MAIL</p>
                    <input type="email" name="email" required>

                    <p for="psw">•SENHA</p>
                    <input type="password"  name="psw" required>
                    
                    <span class="psw">Esqueceu a sua <a href="#">senha?</a></span>

                    <button type="submit">Logar</button>

                    <span class="psw">Não possui uma conta? <a href="../cadastro/cadastro.php">Cadastre-se aqui</a></span>

                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
