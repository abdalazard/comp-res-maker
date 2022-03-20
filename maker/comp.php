<?php 
  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $cep = $_POST['cep'];
  $valor = $_POST['valor'];
  $vencimento = $_POST['vencimento'];
  $emissao = $_POST['emissao'];
  $periodo1 = $_POST['periodo1'];
  $periodo2 = $_POST['periodo2'];
  $mes1 = $_POST['mes1'];
  $mes2 = $_POST['mes2'];
  $mes3 = $_POST['mes3'];
  $mes4 = $_POST['mes4'];
  $mesref = $_POST['mesref'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PDF</title>
      <style> 
        #calma {
          width:800px;
          height:1180px;
        }
        #nome {
          position: absolute;
          font-size: 20px;
          left: 0px;
          top: 130px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #endereco {
          position: absolute;
          font-size: 18px;
          left: 0px;
          top: 152px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #cep {
          position: absolute;
          font-size: 18px;
          left: 0px;
          top: 173px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }    
        #valor {
          position: absolute;
          font-size: 27px;
          left: 680px;
          top: 130px;
          color:white;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #valor2 {
          position: absolute;
          font-size: 12px;
          left: 355px;
          top: 527px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #valor3 {
          position: absolute;
          font-size: 11px;
          left: 352px;
          top: 773px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #valor4 {
          position: absolute;
          font-size: 12px;
          left: 353px;
          top: 470px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #valor5 {
          position: absolute;
          font-size: 9.5px;
          left: 726px;
          top: 629px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #valor6 {
          position: absolute;
          font-size: 15px;
          left: 700px;
          top: 1025px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #vencimento {
          position: absolute;
          font-size: 18px;
          left: 675px;
          top: 190px;
          color:white;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #vencimento2 {
          position: absolute;
          font-size: 15px;
          left: 565px;
          top: 1025px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #emissao {
          position: absolute;
          font-size: 11.5px;
          left: 703px;
          top: 228px;
          color:white;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #emissao2 {
          position: absolute;
          font-size: 15px;
          left: 435px;
          top: 1025px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #periodo1 {
          position: absolute;
          font-size: 12px;
          left: 630px;
          top: 290px;
          color:white;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #periodo2 {
          position: absolute;
          font-size: 12px;
          left: 700px;
          top: 290px;
          color:azure;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
        #mes1 {
          position: absolute;
          font-size: 10px;
          left: 410px;
          top: 625px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: capitalize;
        }
        #mes2 {
          position: absolute;
          font-size: 10px;
          left: 410px;
          top: 650px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: capitalize;
        }
        #mes3 {
          position: absolute;
          font-size: 10px;
          left: 410px;
          top: 679px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: capitalize;
        }
        #mes4 {
          position: absolute;
          font-size: 10px;
          left: 410px;
          top: 699px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: capitalize;
        }
        #mesref {
          position: absolute;
          font-size: 14px;
          left: 320px;
          top: 1025px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: capitalize;
        }

        #nome2 {
          position: absolute;
          font-size: 14px;
          left: 45px;
          top: 990px;
          color:black;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
        }
      
      </style>
      <link rel="stylesheet" href="materialize/css/materialize.min.css">
  </head>
  <body>           
    <div>
      <img src="nextel.png" class="calma" id="calma">
      <label id="nome"><b><b> <?php echo $nome ?> </b></b> </label>
      <label id="endereco"> <?php echo $endereco ?></label>
      <label id="cep"> <?php echo $cep ?>  </label>
      <label  id="valor" ><b> <?php echo $valor ?> </b> </label>
      <label  id="vencimento" ><b> <?php echo $vencimento ?> </b> </label>
      <label  id="emissao" ><?php echo $emissao ?>  </label>
      <label  id="periodo1" ><?php echo $periodo1 ?> - </label>
      <label  id="periodo2" ><?php echo $periodo2 ?> </label>
      <label  id="valor2" > <?php echo $valor ?>  </label>
      <label  id="valor3" > <?php echo $valor ?>  </label>
      <label  id="valor4" > <?php echo $valor ?>  </label>
      <label  id="valor5" > <?php echo $valor ?>  </label>
      <label  id="valor6" > <b><?php echo $valor ?> </b> </label>
      <label  id="vencimento2" ><b> <?php echo $vencimento ?> </b> </label>
      <label  id="emissao2" ><?php echo $emissao ?>  </label>
      <label  id="mes1" ><?php echo $mes1 ?>  </label>
      <label  id="mes2" ><?php echo $mes2 ?>  </label>
      <label  id="mes3" ><?php echo $mes3 ?>  </label>
      <label  id="mes4" ><?php echo $mes4 ?>  </label>
      <label  id="mesref" ><?php echo $mesref ?>  </label>
      <label id="nome2"><b><b> <?php echo $nome ?> </b></b> </label>
    </div> 
    <script>alert( "Para imprimir, digite CTRL+P");</script>
  </body>
</html>