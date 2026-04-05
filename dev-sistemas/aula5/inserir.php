<?php

    include 'conexao.php';

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];

    $sql = "INSERT INTO aluno (nome, idade, email, telefone) VALUES (:nome, :idade, :email, :telefone)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->execute();

    header('Location:index.php');
    exit();

?>