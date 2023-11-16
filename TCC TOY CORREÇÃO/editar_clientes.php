<?php

if(!empty($_GET['id']))
{

    include_once('config.php');

    $id_usuarios = $_GET['id'];

    $sqlSelect = "SELECT * FROM tbusuarios WHERE id_usuarios=$id_usuarios";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $cpf = $user_data['cpf'];
            $cep = $user_data['cep'];
            $data_nasc = $user_data['data_nasc'];
            $telefone = $user_data['telefone'];
        }
    }
    else
    {
        header('Location: sistema.php');
    }
}
else
{
    header('Location: sistema.php');
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
    <title>Editar Clientes</title>
</head>
<body> 
   <div id="form"> 
        <form action="saveEdit.php" method="post">
            <h2 class="title">Editar Clientes</h2>
            <label for="nome">Nome</label>
            <div class="input">
                <i class="bi bi-person"></i>
                <input id="nome" name="nome" type="text" placeholder="Nome" value="<?php echo $nome ?>" required>
            </div>
            <label for="email">E-mail</label>
            <div class="input">
                <i class="bi bi-envelope"></i>
                <input id="email" name="email" type="email" placeholder="E-mail" value="<?php echo $email ?>" required>
            </div>
            <label for="senha">Senha</label>
            <div class="input">
                <i class="bi bi-file-earmark-lock2-fill"></i>
                <input id="senha" name="senha" type="password" placeholder="Senha" value="<?php echo $senha; ?>"required>
            </div>
            <label for="cpf">CPF</label>
            <div class="input">
                <i class="bi bi-person-vcard"></i>
                <input id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" type="text" placeholder="CPF" value="<?php echo $cpf ?>" required>
            </div>
            <label for="cep">CEP</label>
            <div class="input">
                <i class="bi bi-house-door-fill"></i>
                <input id="cep" name="cep" pattern= "\d{5}-?\d{3}" type="text" placeholder="CEP" value="<?php echo $cep ?>"required>
            </div> 
            <label for="data_nascimento">Data de Nascimento</label>
            <div class="input">
            <i class="bi bi-calendar-minus-fill"></i>
                <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" required>
                </div>
                
            <label for="telefone">Telefone</label>
            <div class="input">
                <i class="bi bi-telephone-fill"></i>
                <input id="telefone" name="telefone" type="tel" placeholder="(99) 99999-9999" value="<?php echo $telefone ?>" required>
            </div><br>
            <input type="hidden" name="id" value="<?php echo $id_usuarios ?>">
            <div class="btn">
                <button type="submit" name="update" id="update">Enviar</button>
            </div>
        </form> <br>
        <div class="links-uteis">
            <a href="sistema.php"><p>Voltar</p></a>
        </div>
    
   </div>

</body>
</html>