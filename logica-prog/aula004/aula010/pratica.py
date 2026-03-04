from turtle import *
from random import randint

bgcolor('Black')

def sair():
   """Função para sair do programa."""
   global tela
   tela.bye()


def desenhar():
   circulo = 5
   x = -(circulo)

   screen = Screen()
   root = screen.getcanvas().master
   root.attributes("-fullscreen", True)  # Maximiza a janela

   speed("fastest")
   root.bind('<Escape>', lambda event: sair())
   root.focus_set()  # Garante que a janela tenha o foco para capturar eventos de teclado

   while True:
      pencolor("White")
      penup()
      goto(0, x)
      pendown()
      circle(circulo)
      circulo += 5
      x -= 5


if __name__ == '__main__':
   tela = Screen()
   desenhar()
   tela.mainloop()