<?php

    include '../sessao.php';
    include '../conexao.php';

    $nome = $_GET['nome'];
    $qtdTitulos = $_GET['qtdTitulos'];

    $sql = "INSERT INTO team (nome, qtdTitulos) VALUES (:nome, :qtdTitulos)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':qtdTitulos', $qtdTitulos);
    $stmt->execute();

    header('Location:index.php');
    exit();

?>