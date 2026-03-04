from turtle import *
from random import randint

bgcolor('Black')
colors = ["Green", "Orange", "Cyan", "White", "Yellow", "Dark Red", "Pink", "Purple"]

def desenhar():
    i = 0
    while True:
        penup()
        circulo = randint(30, 100)
        x = randint(-1000, 1000)
        y = randint(-1000, 1000)  
    
        pencolor('Green')

        begin_fill()

        speed("fastest")

        goto(x, y)
        circle(circulo)
        color(colors[i])
        i = i + 1

        end_fill()

        pendown()

        if i == 8:
            i = 0

if __name__ == '__main__':
   tela = Screen()
   desenhar()
   tela.mainloop()