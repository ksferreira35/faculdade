<?php
    include 'conexao.php';
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
        <thead class="table-dark">
            <tr>
                <th>Posição</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade de Títulos</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; while ($linha = $consulta->fetch(PDO::FETCH_OBJ)): ?>
            <tr>
                <td><?php echo $i++ . 'º' ?></td>
                <td><?php echo $linha->id_time ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->qtdTitulos ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>