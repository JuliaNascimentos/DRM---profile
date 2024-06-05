<?php

    // Inicio da sessão
    session_start();

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'banco_usuarios';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Falha ao conectar ao banco de dados'.mysqli_error($conn));
    }
?>