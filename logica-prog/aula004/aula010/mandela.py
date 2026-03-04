import turtle
import time
import random
import math




def configurar_tela():
   """Configura as propriedades da tela."""
   screen = turtle.Screen()
   root = screen.getcanvas().master
   root.attributes("-fullscreen", True)
   largura = root.winfo_screenwidth()
   altura = root.winfo_screenheight()
   screen.setup(width=largura, height=altura)
   screen.bgcolor("black")
   screen.tracer(0)
   return screen, root




def criar_tartaruga():
   """Cria e configura a tartaruga."""
   tartaruga = turtle.Turtle()
   tartaruga.speed(0)
   tartaruga.hideturtle()
   tartaruga.pensize(1)
   return tartaruga




def desenhar_elemento_mandala(tartaruga, tamanho, cor, forma="poligono", num_lados=3):
   """Desenha um elemento básico da mandala (polígono ou círculo)."""
   tartaruga.fillcolor(cor)
   tartaruga.begin_fill()
   if forma == "poligono":
       for _ in range(num_lados):
           tartaruga.forward(tamanho)
           tartaruga.left(360 / num_lados)
   elif forma == "circulo":
       tartaruga.circle(tamanho)
   tartaruga.end_fill()




def desenhar_mandala(tartaruga, cores, raio, num_elementos):
   """Desenha uma mandala complexa com elementos variados (polígonos ou círculos)."""
   for i in range(num_elementos):
       tartaruga.penup()
       angle = i * (360 / num_elementos)
       x = raio * math.cos(math.radians(angle))
       y = raio * math.sin(math.radians(angle))
       tartaruga.goto(x, y - 20)
       tartaruga.pendown()
       cor = random.choice(cores)
       tamanho = random.randint(10, 30)
       if random.random() < 0.7:  # 70% de chance de ser um polígono
           num_lados = random.randint(3, 10)
           desenhar_elemento_mandala(tartaruga, tamanho, cor, "poligono", num_lados)
       else:  # 30% de chance de ser um círculo
           desenhar_elemento_mandala(tartaruga, tamanho, cor, "circulo")
       tartaruga.penup()
       tartaruga.goto(0, 0)
       tartaruga.right(360 / num_elementos)




def sair():
   """Função para sair do programa."""
   global tela
   tela.bye()




def main():
   """Função principal para executar o descanso de tela de mandala."""
   global tela
   tela, root = configurar_tela()
   tartaruga = criar_tartaruga()
   cores = ["red", "orange", "yellow", "green", "blue", "purple", "pink", "cyan", "magenta"]
   raio_mandala = min(tela.window_width(), tela.window_height()) // 3
   num_elementos = 36


   root.bind('<Escape>', lambda event: sair())
   root.focus_set()


   while True:
       tartaruga.clear()
       desenhar_mandala(tartaruga, cores, raio_mandala, num_elementos)
       tela.update()
       time.sleep(3)




if __name__ == "__main__":
   main()
