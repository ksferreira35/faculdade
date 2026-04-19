<?php
    include '../sessao.php';
    include '../conexao.php';

    $time = null;

    if (isset($_GET['id_time'])) {
        $id_time = $_GET['id_time'];

        $sqlEdicao = "SELECT * FROM team WHERE id_time = :id_time";
        $stmtEdicao = $conexao->prepare($sqlEdicao);
        $stmtEdicao->bindParam(':id_time', $id_time);
        $stmtEdicao->execute();
        $time = $stmtEdicao->fetch(PDO::FETCH_OBJ);
    }

    $sql = "SELECT * FROM team ORDER BY qtdTitulos DESC";
    $consulta = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <h2 class="mb-3">Lista de Times</h2>

    <table class="table table-bordered table-striped">

    <form action="<?php echo isset($time) ? "editar.php" : "inserir.php" ?>" method="get">
        <input type="hidden" name="id_time" 
               value="<?php echo isset($time) ? $time->id_time : '' ?>">

        Nome: <input type="text" name="nome" 
                     value="<?php echo isset($time) ? $time->nome : '' ?>">

        Quantidade de Títulos: 
        <input type="number" name="qtdTitulos" 
               value="<?php echo isset($time) ? $time->qtdTitulos : '' ?>">

        <input type="submit" value="Salvar">
    </form>

        <br><br>

        <thead class="table-dark">
            <tr>
                <th>Posição</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade de Títulos</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; while ($linha = $consulta->fetch(PDO::FETCH_OBJ)): ?>
            <tr>
                <td><?php echo $i++ . 'º' ?></td>
                <td><?php echo $linha->id_time ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->qtdTitulos ?></td>
                <td>
                    <a href="index.php?id_time=<?php echo $linha->id_time ?>">Editar</a> |
                    <a href="excluir.php?id_time=<?php echo $linha->id_time ?>">Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>