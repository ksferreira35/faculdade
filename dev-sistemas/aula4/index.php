<?php

    include 'conexao.php';

    $sql = " SELECT * FROM aluno WHERE nome like 'J%'";
    $consulta = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
        ?>

        <tr>
            <td><?php echo $linha->id_aluno  ?></td>
            <td><?php echo $linha->nome ?></td>
        </tr>

        <?php
            }
        ?>

    </table>

</body>
</html>