<?php
    include '../conexao.php';

    $id_time = $_GET['id_time'];
    $nome = $_GET['nome'];
    $qtdTitulos = $_GET['qtdTitulos'];
    
    $sql = " UPDATE team SET nome = :nome, qtdTitulos = :qtdTitulos 
             WHERE id_time = :id_time ";

    $smt = $conexao->prepare($sql); 
    $smt->bindParam(':nome', $nome);
    $smt->bindParam(':qtdTitulos', $qtdTitulos);
    $smt->bindParam(':id_time', $id_time);

    $smt->execute();

    header('Location:index.php');
?>