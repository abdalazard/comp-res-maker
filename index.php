<?php
 ini_set('default_charset','UTF-8');
?>
<?php
    session_start();

    if(isset($_SESSION["nome"])){
        header("location:menu/menu.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <style>              
        .login{
            width: 340px;
            height: 345px;
            background-color: white;

            }
    </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper black">
            <a href="index.php" class="brand-logo">Comp1000</a>
        
        </div>
    </nav>
    <div class="container"> 
        
        <br><br>
        <div class="login card-panel">        
            <h3>Entrar</h3>
            <form action="user/verificar-login.php" method="POST">
                <label>Login</label>
                <input type="text" name="login" id="login" required>
                <label>Senha</label>
                <input type="password" name="senha" id="senha" required>
                <input type="submit" value="Logar" class="btn black">
            </form>
            <p> <?php if(isset($_GET["msg"])){ echo $_GET["msg"]; } ?> </p>
        </div>
    </div>
</body>
</html>