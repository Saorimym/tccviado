<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM tbusuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);
        $linha = mysqli_fetch_array($result);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            $_SESSION['log']='desativo';
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            echo "<script language='javascript'>alert('Email ou senha incorretos');window.location.href='entrar.php'</script>";
        }
        else
        {   
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $nomeuser=$linha['nome'];
            $_SESSION['nome']= $nomeuser;
            $_SESSION['id_usu']=$linha['id_usuarios'];
            $_SESSION['log']='ativo';
            if ($linha['nivel']=='adm'){
            echo "<script language='javascript'>alert('Bem vindo $nomeuser');window.location.href='sistema.php'</script>";
            }else {
            echo "<script language='javascript'>alert('Bem vindo $nomeuser');window.location.href='index.php'</script>";
            }
        }
    }
    else
    {
        // Não acessa
        echo "<script language='javascript'>alert('Email ou senha incorretos');window.location.href='entrar.php'</script>";
    }
?>