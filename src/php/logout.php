<?php
    session_start();
    //Apaga/encerra todas as variáveis existentes
    session_unset();
    //Encerra a sessão existente
    session_destroy();
    echo "<h3>Sua sessão foi encerrada</h3>";
    header("Refresh: 2, URL = ../../");
?>