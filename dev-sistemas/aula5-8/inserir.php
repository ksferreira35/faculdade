<?php

    include 'conexao.php';

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];

    if($id) {
        $sql = "UPDATE aluno SET nome = :nome, idade = :idade, email = :email, telefone = :telefone WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
     
    } else {
        $sql = "INSERT INTO aluno (nome, idade, email, telefone) VALUES (:nome, :idade, :email, :telefone)";
        $stmt = $conexao->prepare($sql);

    }

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->execute();

    header('Location:index.php');
    exit();

?>