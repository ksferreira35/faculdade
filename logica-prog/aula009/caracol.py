import turtle

t = turtle.Turtle()
turtle.bgcolor("Black")
numeros = 10

def desenhar():
    global numeros
    t.shape("turtle")
    for numero in range(400):
        t.right(90)
        t.forward(numeros)
        t.color('Dark red')
        numeros += 10
        print(numeros)

if __name__ == '__main__':
   tela = turtle.Screen()
   desenhar()
   tela.mainloop()