<?php

$num1 = 10;
$num2 = 5;
$operacao = "*";

switch ($operacao) {

    case "+":
        echo $num1 + $num2;
        break;

    case "-":
        echo $num1 - $num2;
        break;

    case "*":
        echo $num1 * $num2;
        break;

    case "/":
        echo $num1 / $num2;
        break;

    default:
        echo "Operação inválida";
}

?>