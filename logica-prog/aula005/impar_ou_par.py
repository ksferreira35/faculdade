try:
    num = int(input("Digite um número: "))
    if num % 2 == 0 and num > 0:
        print("O número é par e positivo")
    elif num % 2 == 1 and num > 0:
        print("O número é ímpar e positivo")
    elif num % 2 == 1 and num < 0:
        print("O número é ímpar e não é positivo")
    else:
        print("O número é par e não é positivo")

except Exception as e:
    print(f"\033[1;31mO número não atende os critéritos {e}\033[m")
