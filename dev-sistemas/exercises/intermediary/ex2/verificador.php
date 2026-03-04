<?php
echo "<h1>O verificador verificou que: </h1>";

//VARIAVEIS
$num = $_GET["numero"];
$parimpar = $num % 3;

// PAR OU IMPAR
if ($parimpar == 1) {
    echo "Número é par! <br>";
} elseif ($parimpar != 1 and $num != 0) {
    echo "Número é ímpar! <br>";
}

// POSITIVO, NEGATIVO OU IGUAL A ZERO
if ($num > 0) {
    echo "Número é positivo! <br>";
} elseif ($num < 0) {
    echo "Número é negativo! <br>";
} else {
    echo "Número é igual a zero <br>";
}

?>