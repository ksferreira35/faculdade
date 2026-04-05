<?php

    include 'conexao.php';

    $id_time = $_GET['id_time'];

    $sql = "DELETE FROM team WHERE id_time =:id_time";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id_time', $id_time);
    $stmt->execute();

    header('Location:index.php');

?>