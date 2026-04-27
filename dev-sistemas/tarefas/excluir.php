<?php
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }

    include 'conexao.php';

    $id         = $_GET['id'] ?? '';
    $usuario_id = $_SESSION['usuario_id'];

    $sql  = "DELETE FROM tarefas WHERE id = :id AND usuario_id = :usuario_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id',         $id);
    $stmt->bindParam(':usuario_id', $usuario_id);
    $stmt->execute();

    header('Location: index.php');
    exit;
?>
