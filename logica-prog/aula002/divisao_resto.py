try:
    num1 = int(input("Digite um número: "))
    num2 = int(input("Digite outro número: "))

    divi_int = num1 // num2
    resto = num1 % num2
    
    print(f"A divisão inteira é {divi_int}. \nO resto da divisão é {resto}")

except Exception as e:
    print(f"\033[1;31mDeu erro ai em :D\033[1;33m\n{e}\033[m")
