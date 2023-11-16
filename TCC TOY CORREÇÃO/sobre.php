<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/sobre.css">
    <title>Sobre</title>
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
       
    </section>

    <div class="faixa">
        <div class="imagem">
            <img src="assets/img/quemsomos.png">
        </div>
        <div class="texto">
            <h1>Equipe LAMPP</h1> <br>
            <p>A Equipe LAMPP é formada por cinco estudantes da Escola Técnica Estadual da região de Poá do curso Técnico em Informática para a internet, Ana Luísa Leite Souza, Leonardo Hermínio Carvalho Pereira, Monique Souza Fermino, Pedro Ferreira da Silva e Pedro Henrique Roberto Laureano. A ideia do projeto veio através de pesquisas, a equipe percebeu que havia uma carência no mercado de artesões com uma plataforma de vendas digital.</p>
        </div>
    </div>

    <section class="missao-visao-valores">
        <div class="item">
            <i class="fas fa-bullseye fa-2x"></i>
            <h2>Missão</h2>
            <p>Foco no desenvolvimento de empreendedores, contribuindo para o melhor uso de seus serviços, suprindo as necessidades do cliente em relação a seu trabalho e formalizando sua profissão.</p>
        </div>
        <div class="item">
            <i class="fas fa-eye fa-2x"></i>
            <h2>Visão</h2>
            <p>Se tornar referencial no mercado regional, seja pelo gerenciamento eficiente e pela contribuição na região.</p>
        </div>
        <div class="item">
            <i class="fas fa-balance-scale fa-2x"></i>
            <h2>Valores</h2>
            <p>O comprometimento profissional e social no desenvolvimento do projeto, junto a confiança no trabalho realizado.</p>
        </div>
    </section>

    <div class="footer">
        <p>&copy; 2023 EQUIPE LAMPP. Todos os direitos reservados.</p>
    </div>

   <script src="assets/js/menu.js"></script>
</body>
</html>