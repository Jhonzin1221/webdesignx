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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="wallpapersite.ico" type="image/x-icon">
    <title>WebDesignX</title>
</head>
<body>
    
<?php 
    include 'includes/header.php';
?>

<main>
    <div class="container">
        <div class="inicio">
            <h2>Bem Vindos a WDX</h2>
            <p>Nós da WDX temos a honra de receber você aqui em noso site, esperamos que você tenha uma experiência incrível!</p>
        </div>
        <h2 class="apresentacao">Conheça alguns de nossos projetos</h2>
        <div class="cartoes">
            <div class="cartao">
                <div class="img-cartao">
                    <img src="assets/img/wallpapersite.jpg" alt="site com design profissional">
                </div>
                <div class="titulo">
                    <h2>Site Profissional 1</h2>
                </div>
                <button>Ver Site</button>
            </div>
            
            <div class="cartao">
                <div class="img-cartao">
                    <img src="assets/img/wallpapersite.jpg" alt="site com design profissional">
                </div>
                <div class="titulo">
                    <h2>Site Profissional 2</h2>
                </div>
                <button>Ver Site</button>
            </div>
            
            <div class="cartao">
                <div class="img-cartao">
                    <img src="assets/img/wallpapersite.jpg" alt="site com design profissional">
                </div>
                <div class="titulo">
                    <h2>Site Profissional 3</h2>
                </div>
                <button>Ver Site</button>
            </div>
        
        </div>
        <div class="convite">
            <h2>Gostou de algum de nossos design's?</h2>
            <p>Conheça mais Sobre nossos designer's e nossa empresa</p>
            <button onclick="produtos()">Conhecer</button>
        </div>
    </div>
</main>

<?php 
    include 'includes/footer.php';
?>
<script src="assets/js/script"></script>
<script>
    function produtos(){
        window.location.href = "produtos.php";
        }
</script>
</body>
</html>