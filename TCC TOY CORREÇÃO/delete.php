<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id_usuarios = $_GET['id'];

        $sqlSelect = "SELECT * FROM tbusuarios WHERE id_usuarios=$id_usuarios";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tbusuarios WHERE id_usuarios=$id_usuarios";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');

?>