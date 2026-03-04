# Multiplicar tipos
x = 7
y = 5
print(f"{x} multiplicado por {y} é igual a {x * y}")

# Para não pular de linha parâmetro end =''
print(f"{x} * {y} = ", end='')
print(x * y)

# Para não pular de linha parâmetro end =''
print(f"{"-" * 20}\n{x} * {y} = ", end='')
print(f"{x * y}\n{'-' * 20}")

# f-string
print(f"{x} * {y} = {x * y}")

# Conversão de dados
print(str(x) + ' * ' + str(y) + ' = ' + str(x*y))