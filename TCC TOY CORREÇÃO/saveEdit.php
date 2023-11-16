<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id_usuarios = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];
        $data_nasc = $_POST['data_nasc'];
        $telefone = $_POST['telefone'];

        $sqlUpdate = "UPDATE tbusuarios SET nome='$nome',email='$email',senha='$senha',cpf='$cpf',cep='$cep'
        ,data_nasc='$data_nasc',telefone='$telefone' WHERE id_usuarios='$id_usuarios'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');
    

?>