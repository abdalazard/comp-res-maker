<?php include_once "../config/autenticacao.php";?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../materialize/css/materialize.min.css">
        <title>PDF</title>
        <style> 
            #container {
                position: relative;
            }
        </style>  

    </head>
    <body>
        <nav>
            <div class="nav-wrapper black">
                <a href="../index.php" class="brand-logo">Comp1000</a>
            </div>
        </nav>
        <br>
        <a href="../menu/menu.php" class="red btn" >Voltar</a><br><br>
        <div id="container">
            <form action="comp.php" METHOD="POST">
                <div class="row">
                    <div class="col s3">
                        <input type="text" name="nome"  placeholder="Nome Completo" required>    
                    </div>
                    <div class="col s3">
                        <input type="text" size="40" name="endereco" placeholder="PADRAO:Rua número - complemento - bairro" required>
                    </div>
                    <div class="col s3">
                        <input type="text" name="cep" size="40" placeholder="PADRAO: CEP(12345-678) - MUNICIPIO - UF" required>
                    </div>
                </div>
                
                <br><br>
                <div class="row">
                    <div class="col s3">
                        <input type="text" name="valor" placeholder="Valor Conta" required>
                    </div>
                    <div class="col s3">
                        <input type="text" name="vencimento" maxlength="10" placeholder="Vencimento" required>
                    </div>
                    <div class="col s3">
                        <input type="text" name="emissao" maxlength="10" placeholder="Emissão" required>
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col s3">
                        <input type="text" name="periodo1" maxlength="10" placeholder="Periodo utilizado: 1ª data" required>
                    </div>
                    <div class="col s3">
                        <input type="text" name="periodo2" maxlength="10" placeholder="Periodo utilizado: 2ª data" required>
                    </div>
                    <div class="col s3">
                        <input type="text" name="mesref" maxlength="6" placeholder="Mês referencia: MAI/20" required>
                    </div>
                    
                </div>
                <div class="row">   
                    <div class="col s3">
                        <input type="text" size="40" name="mes4" maxlength="6" placeholder="Mês antepass. Ex: Abr 2020" required>
                    </div>                 
                    <div class='col s3'>
                        <input type="text" size="40" name="mes1" maxlength="6" placeholder="Mês Atual. Ex: Jan 2020" required>
                    </div>
                    <div class="col s3">
                        <input type="text" size="40" name="mes2" maxlength="6" placeholder="Mês passado. Ex: Fev 2020" required>
                    </div>
                    <div class="col s3">
                        <input type="text" size="40" name="mes3" maxlength="6" placeholder="Mês retras. Ex: Mar 2020" required>
                    </div>
                </div>                
                <br><br>
                <input type="submit" class="btn black" value="Montar Comprovante">
            </form>
        </div>    
    </body>
</html>