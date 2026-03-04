<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <form method="post" action="resultado.php">
        <h1>Calculadora Simples</h1>

        N1: <input type="number" name="numero1" placeholder="Número 1">

        <br>
        <select name="operacoes" id="operacoes">
            <option value="mais">+</option>
            <option value="menos">-</option>
            <option value="divisao">/</option>
            <option value="multiplicacao">*</option>
        </select>
        <br>

        N2: <input type="number" name="numero2" placeholder="Número 2">

        <br>
        <input type="submit" value="Calcular">


    </form>
</body>
</html>