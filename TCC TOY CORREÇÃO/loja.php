<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/loja.css">
    <title>Loja</title>
</head>
<body>
    <header id="header">
        <div class="container">

            <div class="flex">

                <a href="index.php"><img class="logo" src="assets/img/logo.png"></i> </a>
                <?php
                include_once('config.php');
                session_start();
                ?>
                <nav>
                    <ul>
                        <li><a href="index.php"><img src="assets/img/casa.png" style="max-width: 25px">  &nbsp;  HOME</a></li>
                        <li><a href="loja.php"><img src="assets/img/loja-alt.png" style="max-width: 25px">  &nbsp; LOJA</a></li>
                        <li><a href="sobre.php"><img src="assets/img/sobre.png" style="max-width: 25px">  &nbsp; SOBRE</a></li>
                    </ul>
                </nav>
                <?php    
                if ($_SESSION['log']=='ativo'){
                  echo"  <div class='btn-entrar'>";
                  $mens= $_SESSION['nome'];
                 echo"<a href='perfil.php'><button> $mens </button></a>";
                echo"</div>";
                } else {        
                echo "<div class='btn-entrar'>";
                echo " <a href='entrar.php'><button>ENTRAR</button></a>";
                echo"</div>";
                }
                ?>

            </div><!--flex-->
        </div><!--container-->
    </header>

    <section class="banner">

    </section> <BR></BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <br> <BR> <BR> <BR> 
 

<div class="footer">
        <p>&copy; 2023 EQUIPE LAMPP. Todos os direitos reservados.</p>
    </div>


    <script src="assets/js/loja.js"></script>
   <script src="assets/js/menu.js"></script>
</body>
</html>