<?php
session_start();
//if(!empty($_GET['id']))
//{
    include_once('config.php');

   // $id_usuarios = $_GET['id'];

    $id_usuarios= $_SESSION['id_usu'];
    echo $id_usuarios;
    echo 
    $sqlSelect = "SELECT * FROM tbusuarios WHERE id_usuarios=$id_usuarios";

    $result = $conexao->query($sqlSelect);

    while($user_data = mysqli_fetch_array($result))
        {
            $nome = $_SESSION['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $cpf = $user_data['cpf'];
            $cep = $user_data['cep'];
            $data_nasc = $user_data['data_nasc'];
            $telefone = $user_data['telefone'];
            $_SESSION['nome']=$_SESSION['nome'];
            $_SESSION['cpf']= $cpf;
            $_SESSION['cep']= $cep;
            $_SESSION['data_nasc']= $data_nasc;
            $_SESSION['telefone']= $telefone;

          }
//}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Perfil do Usuário</title>
  <link rel="stylesheet" href="assets/css/perfil.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
  <div class="background">
    <div class="container">
      <div class="profile-container">
        <div class="profile-header">
          <img src="assets/img/logo.png" alt="Avatar do usuário">
          <div class="buttons">
            <button class="edit-button">Editar</button>
            <button class="logout-button">
              <a href="fechar_sessao.php">Sair</a>
            </button>
          </div>
        </div>
        <div class="user-info">
          <div class="highlight-background">
          <?php    
            if ($_SESSION['log']=='ativo'){
            echo" <p>Nome: $nome </p> ";
            $mens= $_SESSION['nome'];
            echo"  <p>Email: $email </p> ";
            $mens= $_SESSION['email'];
            echo"  <p>Senha: $senha</p> ";
            $mens= $_SESSION['senha'];
            echo"  <p>CPF:  $cpf</p> ";
            $mens= $_SESSION['cpf'];
            echo"  <p>CEP: $cep</p> ";
            $mens= $_SESSION['cep'];
            echo"  <p>Data de Nascimento:$data_nasc</p> ";
            $mens= $_SESSION['data_nasc'];
            echo"  <p>Telefone: $telefone</p> ";
            $mens= $_SESSION['telefone'];
            }
            ?>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>