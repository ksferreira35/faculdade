from turtle import *
from random import randint

bgcolor('Black')

def sair():
   """Função para sair do programa."""
   global tela
   tela.bye()


def desenhar():
    screen = Screen()
    root = screen.getcanvas().master
    root.attributes("-fullscreen", True)  # Maximiza a janela

    speed("fastest")
    root.bind('<Escape>', lambda event: sair())
    root.focus_set()  # Garante que a janela tenha o foco para capturar eventos de teclado

    #Retangulo
    begin_fill()
    color("Green")
    penup()
    pencolor("green")
    goto(0, -400)
    pendown()
    forward(600)
    left(90)
    forward(800)
    left(90)
    forward(1200)
    left(90)
    forward(800)
    left(90)
    forward(600)
    penup()
    end_fill()

    #Losangulo
    begin_fill()
    color("Yellow")
    pencolor("yellow")
    goto(-450, 0)
    pendown()
    goto(0, 300)
    goto(450, 0)
    goto(0, -300)
    goto(-450, 0)
    penup()
    end_fill()

    #Circulo
    begin_fill()
    pencolor("blue")
    color("Blue")
    goto(0, -165)
    pendown()
    circle(165)
    end_fill()
    penup()

    # Faixa branca (curva)
    pensize(20)
    pencolor("white")
    goto(-165, 0)
    setheading(-30)
    pendown()
    circle(330, 60)
    penup()

if __name__ == '__main__':
   tela = Screen()
   desenhar()
   tela.mainloop()