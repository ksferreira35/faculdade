<?php

echo "<h1>Contagem De Vogais</h1>";

$palavra = "banana";
$vogais = ["a", "e", "i", "o", "u"];
$contagem = 0;

for ($k = 0; $k < strlen($palavra); $k++) {
    if (in_array($palavra[$k], $vogais)) $contagem++;
}

echo "Na palavra $palavra tem o total de $contagem vogais.";

?>