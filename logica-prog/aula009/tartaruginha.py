# Estrutura sequencial
import turtle
turtle.bgcolor("Black")
def desenhar():
   tartaruga = turtle.Turtle()
   tartaruga.shape("turtle")
   tartaruga.penup
   tartaruga.goto(-200, 0)
   tartaruga.color('green')
   tartaruga.speed('fastest')
   tartaruga.pendown
   tartaruga.right(45)
   tartaruga.forward(300)
   tartaruga.left(90)
   tartaruga.forward(300)
   tartaruga.left(90)
   tartaruga.forward(300)
   tartaruga.left(90)
   tartaruga.forward(300)

if __name__ == '__main__':
   tela = turtle.Screen()
   desenhar()
   tela.mainloop()