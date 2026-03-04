from time import sleep

listaCompras = [];
def menu():
    print(f"""{"*-*" * 20}
1 - Adicionar
2 - Deletar
3 - Ver a lista
999 - Sair
{"*-*" * 20}""")
    

def lista(listaCompras):
    for pos, item in enumerate(listaCompras):
        print(f"\033[1;33m{pos}\033[m - \033[1;34m{item}\033[m")

    return listaCompras


def adicionarProduto():
    continuar = str("")
    while continuar != "N":
        item = str(input("Que item vc desenha adicionar? ").title())

        listaCompras.append(item)
        print(f"\033[1;32mO produto {item} foi adicionado\033[m")
        continuar = str(input("Deseja continuar? [Y/N] ").upper())


def deletarProduto():
    lista(listaCompras)

    deletar = int(input("Qual número você deseja deletar? "))
    itemDeletado = listaCompras[deletar]
    print(f"\033[1;31mO produto {itemDeletado} foi deletado\033[m")
    listaCompras.pop(deletar)


while True:
    menu()
    opcao = int(input("Qual opção deseja? "))

    if opcao == 1:
        adicionarProduto()

    if opcao == 2:
        deletarProduto()

    if opcao == 3:
        lista(listaCompras)
        sleep(3)

    if opcao == 999:
        break