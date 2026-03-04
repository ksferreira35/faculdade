# Constantes com cotações de hoje
Euro = 6.343
Dollar = 5.81
Yuan = 0.803

print("*" * 50)

real = float(input("Digite o valor em Real para converter R$"))

print("*" * 50)
while True:
    print("""Qual conversão você deseja converter
1 - Euro
2 - Dolar
3 - Yuan     
4 - quit""")
    print("*" * 50)
    resposta = int(input("Escolha: "))
    
    if resposta == 1:
        em_euro = real / Euro
        print(f"\033[33mSua conversão de R${real:.2f} para Euro foi €{em_euro:.2f}\033[m")
        print("*" * 50)
    
    elif resposta == 2:
        em_dollar = real / Dollar
        print(f"\033[33mSua conversão de R${real:.2f} para Dolar foi U${em_dollar:.2f}\033[m")
        print("*" * 50)
    
    elif resposta == 3:
        em_yuan = real / Yuan
        print(f"\033[33mSua conversão de R${real:.2f} para Yuan foi ¥{em_yuan:.2f}\033[m")
        print("*" * 50)
    
    elif resposta == 4:
        print("Saindo...")
        break
    
    else:
        print("Digite uma opção válida!")