<?php include_once "../config/autenticacao.php";?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="../materialize/css/materialize.min.css">
        <style> 
            .teste1{
                margin-left: 1200px;
                color: black;
            }
        </style>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper black">
                <a href="../index.php" class="brand-logo">Comp1000</a>
            </div>
        </nav>
        <div class="container">            
            <h3> Painel do Sistema</h3>
            <p> Seja Bem Vindo(a) <?php echo utf8_encode($_SESSION["nome"]); ?> </p>
            <h4> Menu </h4>
            <a href="../maker/comp-res.php" class="btn grey cyan pulse" > Gerar comprovante</a>
            <a href="../sair.php" class="btn red">Sair</a> 
        </div>
    </body>
</html>