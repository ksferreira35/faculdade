<?php

$numeros = [1, 4, 5, 2, 9, 10, 111, 99, 867];

$maior = $numeros[0];
foreach ($numeros as $num) {
    if ($num > $maior) $maior = $num;
}

echo "O maior número é $maior";
?>