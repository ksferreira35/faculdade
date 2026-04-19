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

    $id = $_GET['id'];
    $sql = "DELETE FROM aluno WHERE id =:id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location:index.php');

?>