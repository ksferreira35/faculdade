try:
    altura = float(input("Digite a sua \033[1;33maltura\033[m [\033[1;33mm\033[m]: "))
    peso = float(input("Digite o seu \033[1;32mpeso\033[m [\033[1;32mkg\033[m]: "))

    imc = peso / (altura ** 2)

    print(f"O seu índice médio corporal é \033[1;35m{imc:.2f}\033[m")
except Exception as e:
    print(f"\033[1;31mERROR: {e}\033[m")
