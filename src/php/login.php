<?php
    
    $email = $_POST["email_login"];
    $password = $_POST["password_login"];

    $sql ="SELECT email, senha FROM usuarios WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);
    $login = mysqli_fetch_array($result);

    if(is_null($login)){
        echo"<script type = 'text/javascript'> alert('Conta inexistente'); </script>";
    }else{
        $login_m = $login['email_login'];
        $login_p = $login['senha_login'];

        if(($login_m == $email) && ($login_p == $password)) {
            echo "<script type = 'text/javascript'> alert('Login realizado.');</script>";
            $_SESSION["user"] = $login_m;
            echo'<script type="text/javascript" window.open("./home.php","_self"); </script>';
        } else{
            echo "<script type = 'text/javascript'> alert('Email ou senha invalido.');</script>";
        }  
    }
?>