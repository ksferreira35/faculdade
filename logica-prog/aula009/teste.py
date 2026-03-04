import turtle

valor = 5
turtle.bgcolor("black")
def desenhar():
    global valor
    tartaruga = turtle.Turtle()
    tartaruga.shape('turtle')
    tartaruga.speed('slowest')

    for _ in range(10):
        # Desenha para cima
        tartaruga.color('red')
        tartaruga.penup()
        tartaruga.goto(0, valor)
        tartaruga.pendown()
        tartaruga.circle(valor)

        # Desenha para baixo
        tartaruga.color('green')
        tartaruga.penup()
        tartaruga.goto(0, -valor)
        tartaruga.pendown()
        tartaruga.circle(valor)

        valor += 10  # Aumenta o tamanho para os próximos círculos

if __name__ == '__main__':
    tela = turtle.Screen()
    desenhar()
    tela.mainloop()
