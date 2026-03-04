import turtle

valor = 5

def desenhar():
    global valor
    tartaruga = turtle.Turtle()
    for numero in range(400):
        numero += 1
        tartaruga.speed("fastest")
        tartaruga.penup()
        tartaruga.goto(0, 0)
        tartaruga.pendown()
        tartaruga.color('blue')
        tartaruga.shape('turtle')
        tartaruga.speed('slowest')
        tartaruga.circle(valor)

        tartaruga.penup()
        tartaruga.goto(-valor, -valor)
        tartaruga.pendown()
        tartaruga.color('blue')
        tartaruga.shape('turtle')
        tartaruga.speed('slowest')
        tartaruga.circle(valor)

        tartaruga.penup()
        tartaruga.goto(0, -valor)
        tartaruga.pendown()
        tartaruga.color('blue')
        tartaruga.shape('turtle')
        tartaruga.speed('slowest')
        tartaruga.circle(valor)

        tartaruga.penup()
        tartaruga.goto(-valor, 0)
        tartaruga.pendown()
        tartaruga.color('blue')
        tartaruga.shape('turtle')
        tartaruga.speed('slowest')
        tartaruga.circle(valor)


        valor += 10



if __name__ == '__main__':
    tela = turtle.Screen()
    desenhar()
    tela.mainloop()
