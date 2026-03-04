maiorIdade = 0
pessoaVelha = ""
pessoas = []

while True:
    nome = str(input("Digite o seu nome: "))
    idade = int(input("Digite sua idade: "))

    pessoas.append((nome, idade))

    continuar = str(input("Continue? [Y/N]"))
    if continuar in "Nn":
        break

    if pessoas:
        mais_velho = pessoas[0]
        for pessoa in pessoas:
            if pessoa[1] > mais_velho[1]:
                mais_velho = pessoa

print(f"A pessoa mais velha é o {mais_velho[0]} com {mais_velho[1]}")
