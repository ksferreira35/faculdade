<?php

    include 'conexao.php';

    $sql = " SELECT * FROM aluno";
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
    <title>AlunosLouquinhos</title>
</head>
<body>
    <h1>Alunos</h1>

    <form method="get" action="inserir.php">
        <input type="hidden" name="id" value="<?php echo isset($aluno) ? $aluno -> id : "" ?>">
        Nome: <input value="<?php echo isset($aluno) ? $aluno -> nome : "" ?>" type="text" name="nome">
        Idade: <input value="<?php echo isset($aluno) ? $aluno -> idade : "" ?>" type="number" name="idade">
        Email: <input value="<?php echo isset($aluno) ? $aluno -> email : "" ?>" type="email" name="email">
        Telefone: <input value="<?php echo isset($aluno) ? $aluno -> telefone : "" ?>" type="text" name="telefone" placeholder="(11) 99999-9999">
        <input type="submit" value="Salvar">
    </form>

    <br><br>

    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
        ?>

        <tr>
            <td><?php echo $linha->id ?></td>
            <td><?php echo $linha->nome ?></td>
            <td><?php echo $linha->idade ?></td>
            <td><?php echo $linha->email ?></td>
            <td><?php echo $linha->telefone ?></td>
            <td><a href="index.php?id=<?php echo $linha->id ?>">Editar</a>
                <a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a>
            </td>
        </tr>

        <?php
            }
        ?>

    </table>

</body>
</html>