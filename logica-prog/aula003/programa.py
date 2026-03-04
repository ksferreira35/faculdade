nome = str(input("Digite um nome: "))
vezes = int(input("Quantidade de vezes: "))

nome = (f"print('{nome}')\n")
lista_nomes = nome * vezes

with open("inp.py", "w") as arquivo:
    arquivo.write(lista_nomes)