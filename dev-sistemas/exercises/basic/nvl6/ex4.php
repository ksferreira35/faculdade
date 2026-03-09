<?php

$alunos = [
    "João" => 5,
    "Lucas" => 7,
    "Marcos" => 10,
    "Jorgin" => 3
];

foreach ($alunos as $aluno => $nota) {
    echo "O aluno $aluno tirou: $nota pontos. <br>";

    if ($nota >= 7) {
        echo "Situação: Aprovado. <br> <br>";
    } else {
        echo "Situação: Reprovado. <br> <br>";
    }
}

?>