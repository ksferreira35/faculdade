opcao = ""

while opcao != "3":
    print("Menu:")
    print("1. Opção 1")
    print("2. Opção 2")
    print("3. Sair")

    opcao = input("Escolha uma opção: ")

    if opcao == "1":
        print("Você escolheu a Opção 1.")
    elif opcao == "2":
        print("Você escolheu a Opção 2.")
    elif opcao == "3":
        print("Saindo...")
    else:
        print("Opção inválida.")
