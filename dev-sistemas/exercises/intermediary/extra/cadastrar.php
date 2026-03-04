<?php
session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$pessoa = [
    "nome" => $nome,
    "idade" => $idade
];

$_SESSION['pessoas'][] = $pessoa;

echo "Pessoa cadastrada com sucesso! <br><br>";

echo "<form action='index.php' method='get'>
        <button type='submit'>Cadastrar outra pessoa</button>
      </form>";

echo "<form action='lista.php' method='get'>
        <button type='submit'>Finalizar cadastro</button>
      </form>";

?>