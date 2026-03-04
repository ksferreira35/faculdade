<!DOCTYPE html>
<html>
<body>

<h1>Mini Sistema de Cadastro</h1>

<form method="post" action="cadastrar.php">

Nome: <input type="text" name="nome"><br>
Idade: <input type="number" name="idade"><br>

<input type="submit" value="Cadastrar">

</form>

<br>

<form action='lista.php' method='get'>
    <button type='submit'>Finalizar cadastro</button>
</form>

</body>
</html>