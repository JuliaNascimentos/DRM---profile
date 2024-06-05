<?php
//Cadastro de pessoas

    //Variáveis que recebem os valores de nome, email, senha e confirmação de senha
    $nome = $_POST["nome_cad"];
    $email = $_POST["email_cad"];
    $password = $_POST["password_cad"];
    $password_confirm = $_POST["confirmation_password"];

    //Comando para inserir os dados no banco:

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUE ('$nome','$email','$password');";

    //Teste a conexão com o banco e realize o envio dos dados
    if(mysqli_query($conn, $sql)) {
        echo"<p>Usuário casdastrado com sucesso!</p>";
    } else{
        echo "<p>Ocorreu um erro ao tentar cadastrar o usuário.</p>";
    }
?>