<?php 
    //Importar o arquivo conexao.php
    include("./src/php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style/style_login/style/style.css">
    <link rel="icon" type="image/x-icon" href="./src/img/DRM.png">
    <title>DRM profile - Login</title>
</head>
<body>
    <!--Fundo do website com class = "background"-->
    <div class="background">
        <!--Fundo da caixa dos formulários com class = "box_form-->
        <div class ="box_form" >
            <!--Formulário de Login-->
            <form method="post" id="form" class="login_form">

                <img src="./src/img/DRM.png" alt="DRM Logo" class="icon_logo">

                <label for="email_login">Email:</label>
                <input type="email" name="email_login" id="email_login" class="email" placeholder="Digite seu Email">
                

                <label for="password_login">Senha:</label>
                <input type="password" name="password_login" id="password_login" class="password" placeholder="***************"> 

                <div class ='button_area'>
                    <button type="submit" class="button_entrar" id="button_entrar" value ="entrar" name="entrar">Entrar</button>
                </div>

                <div class = "link">
                    <p class = "link_entrar">Já possui uma conta? <a  href="#">Entrar</a></p>
                </div>
                
            </form>
            <!--Fim do formulário de Login-->

            <!--Formulário de Cadastro-->
            <form action="post" class = "cadastro_form">
                <img src="./src/img/DRM.png" alt="DRM Logo" class="icon_logo">

                <label for="nome_cad">Nome:</label>
                <input type="text" name="nome_cad" id="nome_cad" class="nome" placeholder="Digite seu Nome">

                <label for="email_cad">Email:</label>
                <input type="email" name="email_cad" id="email_cad" class="email" placeholder="Digite seu Email">

                <label for="password_cad">Senha:</label>
                <input type="password" name="password_cad" id="password_cad" class="password_cad" placeholder="***************">

                <label for="confirmation_password">Confirmação de Senha:</label>
                <input type="password" name="confirmation_password" id="confirmation_password" class="confirmation_password" placeholder="***************"> 

                <div class ='button_area'>
                    <button type="submit" class="button_cadastrar" id="button_cadastrar" value ="cadastrar" name="cadastrar">Cadastrar</button>
                </div>

                <div class ="link">
                    <p class = "link_entrar">Não possui uma conta?<a href="#">Cadastrar-se</a></p>
                </div>
            </form>
            <!--Fim do formulário de Cadastro-->
        </div>
        <!--Fim do bloco dos formulários-->
    </div>
    <!--Fim do fundo-->

    <?php

        //Verifica se o botão de login foi ativado
        if(isset($_POST['entrar'])){
            include("./src/php/login.php");
        }else if(isset($_POST["cadastrar"])){
            include("./src/php/cadastro.php");
        }

        //Verifica se o botão de cadastro foi ativado
    ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./src/js/form.js" defer></script>
    
</script>
</body>
</html>