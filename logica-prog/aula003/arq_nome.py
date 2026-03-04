nome = str(input("Digite o seu nome: "))
vezes = int(input("Quantidade de vezes para imprimir: "))
arq = input('Qual o nome do arquivo para gerar? ')

nome += '\n'
lista_nomes = nome * vezes

with open(arq, 'w') as arquivo:
    arquivo.write(lista_nomes)

