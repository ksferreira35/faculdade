<?php

$nome  = $_POST['nome']; 
$idade = $_POST['idade'];  

$cadastro = array("Nome" => $nome, "Idade" => $idade);

echo "<h1>Usuário Casdastrado: </h1>";

if ($idade >= 18) {
    $cadastro["Situação"] = "Maior de Idade";
} else {
    $cadastro["Situação"] = "Menor de Idade";
}

foreach ($cadastro as $key => $value) {
    echo "$key : $value <br>";
}

?>