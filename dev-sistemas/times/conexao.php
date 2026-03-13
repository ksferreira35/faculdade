<?php

    $host = "127.0.0.1";
    $user = "root";
    $porta = "3306";
    $password = "Senha do seu banco";
    $db = "aula_php";


    $conexao = new PDO(
        'mysql:host='.$host.';
        port='.$porta.';
        dbname='.$db,
        $user,
        $password);


?>