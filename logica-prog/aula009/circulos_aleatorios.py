from turtle import *
from random import randint


t = Turtle()
bgcolor("Black")
numeros = 10
color('green')

def desenhar():
    for numero in range(40):
        x = randint(0, 500)
        y = randint(0, 500)
        penup
        goto(x, y)
        pendown
        begin_fill()
        circle(90)
        end_fill()

if __name__ == '__main__':
    tela = Screen()
    desenhar()
    tela.mainloop()