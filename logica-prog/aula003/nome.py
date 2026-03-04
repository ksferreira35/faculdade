def opps(nome, vezes):
    print((nome + "\n") * vezes, end='')

nome = str(input("Digite o seu nome: "))
vezes = int(input("Quantidade de vezes para imprimir: "))

opps(nome, vezes)
