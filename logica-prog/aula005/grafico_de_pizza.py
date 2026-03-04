import matplotlib
import matplotlib.pyplot as plt
matplotlib.use('TkAgg')

def obterValores():
    entrada = input("Digite um número: (ou deixe vazio)")


    if not entrada:
        return -999999
    try:
        numero = float(entrada)
        return numero
    except ValueError:
        print("\033[1;31mDigite um valor válido!\033[m")
        return -999999
    

def valores_grafico():
    valores = []
    while True:
        entrada = obterValores()
        if entrada == -999999:
            break
        valores.append(entrada)
    return valores


def grafico(valores):
    if not valores:
        print("Nenhum valor inserido.")
        return


    plt.pie(valores, autopct='%3.2f%%', startangle=90)
    plt.axis('equal')
    plt.title("Gráfico de pizza top!")
    plt.show()


if __name__ == '__main__':
    valores_pizza = valores_grafico()
    grafico(valores_pizza)