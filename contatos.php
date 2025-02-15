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
    <link rel="stylesheet" href="assets/css/contatos.css">
    <link rel="shortcut icon" href="wallpapersite.ico" type="image/x-icon">
    <title>WebDesignX</title>
</head>
<body>
    <?php 
        include 'includes/header.php';
    ?>

    <main>
        <div class="container">
            <div class="titulo">
                <h1>Contatos</h1>
            </div>
            <div class="contatos">
                <div class="info-formulario">
                    <h2>Formulario de contato</h2>
                </div>
                <form>
                    <div class="campo-escrever">
                        <input type="text" name="name" id="name" placeholder="Nome Completo!" required autocomplete="off">
                    </div>
                    <div class="campo-escrever">
                        <input type="email" name="email" id="email" placeholder="Seu Email Valido!" required autocomplete="off">
                    </div>
                    <div class="campo-escrever">
                        <textarea name="assunto" id="assunto" cols="30" rows="5" placeholder="Seu Assunto!"></textarea>
                    </div>
                    <button>Enviar Formulario</button>
                </form>
            </div>
        </div>
    </main>

    <?php 
        include 'includes/footer.php'
    ?>
</body>
</html>