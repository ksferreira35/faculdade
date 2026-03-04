while True:
    nt1 = float(input("Nota na primeira prova: "))
    nt2 = float(input("Nota na segunda prova: "))

    if not(0 <= nt1 <= 10 and 0 <= nt2 <= 10):
        print("Utilize valores entre 0 e 10")
        continue

    break

media = (nt1 + nt2) / 2

if media < 5:
    print(f"Reprovado! Sua Média = {media} pontos")
else:
    print(f"Aprovado! Sua Média = {media} pontos")

