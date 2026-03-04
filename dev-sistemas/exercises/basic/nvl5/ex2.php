<?php

$opcao = 1;

do {

    echo "Menu:<br>";
    echo "1 - Continuar<br>";
    echo "2 - Sair<br><br>";

    if ($opcao == 1) {
        echo "Continuando...<br><br>";
        $opcao = 2;
    }

} while ($opcao != 2);

echo "Programa encerrado.";

?>