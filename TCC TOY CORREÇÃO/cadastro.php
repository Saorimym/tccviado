<?php
if(isset($_POST['submit']))
{
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('E-mail: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Senha: ' . $_POST['senha']);
    //print_r('<br>');
    //print_r('CPF: ' . $_POST['cpf']);
    //print_r('<br>');
    //print_r('CEP: ' . $_POST['cep']);
    //print_r('<br>');
    //print_r('Data de nascimento: ' . $_POST['data_nasc']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $data_nasc = $_POST['data_nasc'];
    $telefone = $_POST['telefone'];

    $result = mysqli_query($conexao, "INSERT INTO tbusuarios(nome,email,senha,cpf,cep,data_nasc,telefone,nivel)
    VALUES ('$nome','$email','$senha','$cpf','$cep','$data_nasc','$telefone','usuario')");

    header('location: entrar.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Cadastro</title>
</head>
<body> 
   <div id="form"> 
        <form action="cadastro.php" method="post">
            <h2 class="title">Cadastro</h2>
            <label for="nome">Nome</label>
            <div class="input">
                <i class="bi bi-person"></i>
                <input id="nome" name="nome" type="text" placeholder="Nome" required>
            </div>
            <label for="email">E-mail</label>
            <div class="input">
                <i class="bi bi-envelope"></i>
                <input id="email" name="email" type="email" onblur="validacaoEmail(f1.email)" placeholder="E-mail" required>
            </div>
            <label for="senha">Senha</label>
            <div class="input">
                <i class="bi bi-file-earmark-lock2-fill"></i>
                <input id="senha" name="senha" type="password" placeholder="Senha" required>
            </div>
            <label for="cpf">CPF</label>
            <div class="input">
                <i class="bi bi-person-vcard"></i>
                <input id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" type="text" placeholder="CPF" required>
            </div>
            <label for="cep">CEP</label>
            <div class="input">
                <i class="bi bi-house-door-fill"></i>
                <input id="cep" name="cep" pattern= "\d{5}-?\d{3}" type="text" placeholder="CEP" required>
            </div> 
            <label for="data_nascimento">Data de Nascimento</label>
            <div class="input">
            <i class="bi bi-calendar-minus-fill"></i>
                <input type="date" name="data_nasc" id="data_nasc" required>
                </div>
                
            <label for="telefone">Telefone</label>
            <div class="input">
                <i class="bi bi-telephone-fill"></i>
                <input id="telefone" name="telefone" type="tel" placeholder="(99) 99999-9999" required>
            </div><br>
            <div class="btn">
                <button type="submit" name="submit" id="submit">Cadastrar</button>
            </div>
        </form> <br>
        <div class="links-uteis">
            <a href="entrar.php"><p>Já tem conta? Faça o login</p></a>
            <a href="index.php"><p>Voltar para o site</p></a>
        </div>
    
   </div>

</body>
</html>