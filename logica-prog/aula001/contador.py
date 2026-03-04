def contador(a=0, b=0, c=1):
    for contador in range(a, b, c):
        print(contador, end=', ') 
    print("Fim.")
    print("-=-" * 30)

contador(0, 102, 2)
contador(102, -1, -2)
