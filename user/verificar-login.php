<?php
        session_start();
        include '../config/conexao.php';

        $login = $_POST["login"];
        $senha  = md5($_POST["senha"]);

        $sql = "select * from conta where login ='".$login."' and senha = '".$senha."'";

        $result = mysqli_query($con, $sql);
        $total = mysqli_num_rows($result);

        if($total > 0)
        {
                $dados = mysqli_fetch_array($result);
                if(!strcmp($senha, $dados["senha"]))
                {
                        $_SESSION["iduser"] = $dados['iduser'];
                        $_SESSION["nome"] = $dados['nome'];
                        $_SESSION["perfil"] = $dados['perfil'];

                        header("location: ../menu/menu.php");
                }
                else{
                        ?><script>alert( "Senha invalida!");</script><?php

                        header("location: ../index.php");
                }
        }
        else{
                $msg = "Login/Senha inválido(s)";
                header("location:../index.php?msg=".$msg); //redirecionamento em PHP
        }
?>