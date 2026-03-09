<?php

$saldo = 1000;
$saque = 2000;
# $saque = 200;

if ($saque <= $saldo) {
    $saldo -= $saque;
    echo "Saque realizado. Novo saldo: $saldo";
} else {
    echo "Saque negado. <br> Motivo: Saldo insuficiente. <br> Você está tendo sacar $saque reais sendo que possui apenas $saldo reais de saldo.";
}


?>