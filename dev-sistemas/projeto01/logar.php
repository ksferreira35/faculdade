<?php
    session_start();

    include 'conexao.php';

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $email;
        header('Location:times/index.php');
        exit;
    } else {

        $_SESSION['logado'] = false;
        header('Location:index.php');
        exit;
    }
?>