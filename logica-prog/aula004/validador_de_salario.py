while True:
    salario = float(input("Digite o seu sálario: "))

    salario_min = 1518.00

    if salario < salario_min:
        print("\033[1;31mSálario Incorreto! (fora da legislação) Digite um válido!\033[m")
    else:
        print("Sálario registrado!")
        break
