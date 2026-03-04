from random import randint

tentativas = 0
numero_secreto = randint(1, 100)
palpite = 0


while palpite != numero_secreto:
    palpite = int(input("Advinhe o número secreto: "))

    if palpite < numero_secreto:
        print("Seu palpite é muito baixo!")
    elif palpite > numero_secreto:
        print("Seu palpite é muito alto!")
        
    tentativas += 1

print(f"Parabéns! Você advinhou o número \033[1;31m({palpite})\033[m em {tentativas}x")
