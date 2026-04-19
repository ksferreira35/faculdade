<?php

    session_start();
    if (empty($_SESSION) ||$_SESSION['logado'] == false) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Logado: " . $_SESSION['email'];
        echo "<br><a href='../logout.php'>Sair</a>";
    }
    include '../conexao.php';

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    if($id) {
        $sql = "UPDATE aluno SET nome = :nome, idade = :idade WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
    } else {
        $sql = " INSERT INTO aluno (nome, idade) VALUES (:nome, :idade)";
        $stmt = $conexao->prepare($sql);
    }
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->execute();
    header('Location:index.php');
    exit;
?>