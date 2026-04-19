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
    $sql = " SELECT * FROM aluno ";
    $consulta = $conexao->query($sql);

    # Edição
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM aluno WHERE id = :id";
        $consultaUp = $conexao->prepare($sql);
        $consultaUp->bindParam(':id', $id);
        $consultaUp->execute();
        $aluno = $consultaUp->fetch(PDO::FETCH_OBJ);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="inserir.php" method="get">
        <input type="hidden" name="id" value="<?php echo isset($aluno) ? $aluno->id : '' ?>">
        Nome: <input value="<?php echo isset($aluno) ? $aluno->nome : '' ?>" type="text" name="nome" required>
        Idade: <input value="<?php echo isset($aluno) ? $aluno->idade : '' ?>" type="number" name="idade">
        <input type="submit" value="Salvar">
    </form>
    <br><br>

    
    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th colspan="2">Ações</th>
        </tr>
    
        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
        ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->idade ?></td>
                <td>
                    <a href="index.php?id=<?php echo $linha->id ?>">Editar</a> | 
                    <a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a>
                </td>
            </tr>
        <?php 
            } 
        ?>
    </table>

</body>
</html>
