<?php
session_start();
    if ($_SESSION['logado'] == false) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Logado: " . $_SESSION['nome'];
        echo "<br><a href='../logout.php'>Sair</a>";
    }
    include '../conexao.php';
?>