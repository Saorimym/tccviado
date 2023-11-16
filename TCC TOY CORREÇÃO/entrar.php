<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>
   <div id="form">
        <form action="testLogin.php" method="post">
            <h2 class="title">Login</h2>
            <label for="email">E-mail</label>
            <div class="input">
                <i class="bi bi-envelope"></i>
                <input id="email" name="email" type="text" placeholder="E-mail" required>
            </div>
            <label for="senha">Senha</label>
            <div class="input">
                <i class="bi bi-file-earmark-lock2-fill"></i>
                <input id="senha" name="senha" type="password" placeholder="Senha" required>
            </div> <br>
            <div class="btn">
                <button type="submit" name="submit" id="submit">Entrar</button>
            </div>
        </form> <br>
        <div class="links-uteis">
            <a href="cadastro.php"><p>Não tem conta? Cadastre-se</p></a>
            <a href="index.php"><p>Voltar para o site</p></a>
        </div>
    
   </div>
</body>
</html>

