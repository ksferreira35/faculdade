import turtle
import time

def configurar_tela():
   """Configura as propriedades da tela."""
   screen = turtle.Screen()
   root = creen.getcanvas().msaster  # Obtém a janela Tkinter subjacente
   root.attributes("-fullscreen", True)  # Maximiza a janela
   largura = root.winfo_screenwidth()  # Obtém a largura da tela
   altura = root.winfo_screenheight()  # Obtém a altura da tela
   screen.setup(width=largura, height=altura)
   screen.bgcolor("black")
   return screen, root  # Retorna a tela e a janela root


def criar_tartaruga():
   """Cria e configura a tartaruga."""
   tartaruga = turtle.Turtle()
   tartaruga.speed(0)
   tartaruga.hideturtle()
   tartaruga.pensize(10)
   return tartaruga


def desenhar_espiral(tartaruga, cores, tela, tamanho_inicial=5, angulo=91, incremento=5, delay=0.01):
   """Desenha uma espiral colorida na tela."""
   num_cores = len(cores)
   tamanho = tamanho_inicial
   while True:
       tartaruga.pencolor(cores[tamanho % num_cores])
       tartaruga.forward(tamanho)
       tartaruga.right(angulo)
       tamanho += incremento
       tela.update()
       time.sleep(delay)


def sair():
   """Função para sair do programa."""
   global tela
   tela.bye()


def main():
   """Função principal para executar o descanso de tela em espiral."""
   global tela
   tela, root = configurar_tela()  # Recebe a tela e a janela root
   tartaruga = criar_tartaruga()
   cores = ["White", "Dark Green", "Yellow", "Blue"]

   # Vincula a tecla ESC à função sair
   root.bind('<Escape>', lambda event: sair())
   root.focus_set()  # Garante que a janela tenha o foco para capturar eventos de teclado

   desenhar_espiral(tartaruga, cores, tela)
   tela.mainloop()


if __name__ == "__main__":
   main()
