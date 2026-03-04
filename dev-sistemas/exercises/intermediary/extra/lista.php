<?php
session_start();

$pessoas = $_SESSION['pessoas'] ?? [];

$maiores = 0;

echo "<h1>Lista de Pessoas</h1>";

echo "<table border='1'>";
echo "<tr>
<th>Nome</th>
<th>Idade</th>
<th>Situação</th>
</tr>";

foreach ($pessoas as $pessoa) {

    if ($pessoa['idade'] >= 18) {
        $situacao = "Maior de idade";
        $maiores++;
    } else {
        $situacao = "Menor de idade";
    }

    echo "<tr>";
    echo "<td>{$pessoa['nome']}</td>";
    echo "<td>{$pessoa['idade']}</td>";
    echo "<td>$situacao</td>";
    echo "</tr>";
}

echo "</table>";

echo "<br><b>Total de maiores de idade: $maiores</b>";

?>