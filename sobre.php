<?php 
    require 'config/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/sobre.css">
    <link rel="shortcut icon" href="wallpapersite.ico" type="image/x-icon">
    <title>WebDesignX - Sobre Nós</title>
</head>
<body>
    <?php 
        include 'includes/header.php';
    ?>

    <main>
        <div class="container">
            <div class="titulo">
                <h1>Sobre Nós</h1>
            </div>
            <div class="apresentacoes">
                <div class="apresentacao">
                    <div class="img-apresentacao">
                        <img src="assets/img/wallpapersite.jpg" width="100px" alt="Logotipo da empresa">
                    </div>
                    <div class="titulo-apresentacao">
                        <h2>Web Design X</h2>
                    </div>
                    <div class="texto-apresentacao">
                        <p>Sobre Nós: Atualmente somos uma empresa de design e vendas de produtos para informatica, e estamos em constante evolução. <br>
                           Nossos produtos são de alta qualidade e são vendidos em todo o Brasil.
                        </p>
                        <p>Quem somos? : Somos uma empresa focada em produtos de informatica e designers de aplicações web, confira => <a href="produtos.php">Ver Produtos</a></p>
                        <p>Onde estamos localizados? : Atualmente estamos localizados em Rio Branco - Acre, confira => <a href="contato.php">Contato</a></p>
                        <p>Qual a linguagem utilizadas nos sites? : Nós usamos em nossos sites as seguintes linguagens:
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>PHP</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php 
        include 'includes/footer.php';
    ?>
</body>
</html>