<?php

echo "<h1>O seu resultado foi que: </h1>";

//VARIAVEIS
$num1 = $_POST["numero1"];
$oper = $_POST["operacoes"];
$num2 = $_POST["numero2"];

//OPERACOES
if ($oper == "mais") {
    echo "$num1 + $num2 = " . $num1 + $num2;
} elseif ($oper == "menos") {
    echo "$num1 - $num2 = " . $num1 - $num2;
} elseif ($oper == "divisao") {
    echo "$num1 / $num2 = " . $num1 / $num2;
} else {
    echo "$num1 * $num2 = " . $num1 * $num2;
}

?>